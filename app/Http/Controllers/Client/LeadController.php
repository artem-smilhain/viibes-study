<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Controllers\FacebookLeadsController;
use App\Http\Controllers\NotionController;
use App\Http\Controllers\TelegramBotController;
use App\Http\Requests\StoreLeadRequest;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Location;
use Throwable;

class LeadController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLeadRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreLeadRequest $request)
    {
        $data = $request->validated();
        // Get data param
        $data = $this->addAdditionalData($data, $request);
        // Save lead
        $lead = Lead::create($data);
        // Send notification and add lead to notion
        $this->sendNotifications($data);
        // Send conversion to Facebook Ads
        (new FacebookLeadsController)->sendFbEvent($data);
        // Redirect based on lead type
        return $this->getRedirectResponse($lead);
    }

    private function addAdditionalData($data, $request)
    {
        $data['ip'] = $request->ip();
        $data['user_location'] = (new Controller())->get_user_location($data['ip']);
        $data['ip_address'] = implode(' ', [
            $data['user_location']['countryCode'],
            $data['user_location']['cityName'],
            $data['user_location']['postalCode'],
            $data['ip']
        ]);
        $data['user_agent'] = $request->header('User-Agent');
        // Add UTM parameters
        $data = array_merge($data, $this->getUtmParameters());
        // Facebook fbc + fbp
        $data['fbc'] = $request->cookie('_fbc');
        $data['fbp'] = $request->cookie('_fbp');

        return $data;
    }

    private function getUtmParameters()
    {
        $utm_params = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term'];
        $data = [];
        foreach ($utm_params as $param) {
            $data[$param] = Session::get($param, '—');
        }
        return $data;
    }

    private function sendNotifications($data)
    {
        $this->sendToTelegram($data);
        $this->sendToNotion($data);
    }

    private function getRedirectResponse($lead)
    {
        if ($lead['type'] === 'webinar') {
            return redirect()->route('thank-you-webinar');
        }
        return redirect()->route('thank-you', ['conversion' => 'true', 'phone' => $lead['phone']]);
    }
    public function sendToTelegram($data){
        $name = preg_replace('/[^\w_]+/u', ' ', $data['name']); //заменяем спец символы пробелом
        $phone = preg_replace('/[^A-Za-z0-9]/', '', $data['phone']); //убираем спец символы
        $ip_address = str_replace(".","\\.", $data['ip_address']);
        $massage = '';
        $massage = $massage."*Новая заявка с сайта \\(".$data['type']."\\)⚡️* \n";
        $massage = $massage."*Имя: *".$name."\n";
        $massage = $massage."*Телефон: * \\+".$phone."\n";
        $massage = $massage."*IP: *".$ip_address."\n";
        $massage = $massage."Больше информации в Notion\\!\n";
        //send data to telegram
        (new TelegramBotController())->send($massage);
    }
    public function sendToNotion($data){
        $data = [
            'parent' => [ 'database_id' => env('NOTION_DB_ID'), ],
            'properties' => [
                'Title' => ['title' => [['text' => ['content' => $data['name'],],],],],
                'Phone'  => ['rich_text' => [['text' => ['content' => $data['phone'],],],],],
                'UTM_campaign'  => ['rich_text' => [['text' => ['content' => $data['utm_campaign'],],],],],
                'UTM_content'  => ['rich_text' => [['text' => ['content' => $data['utm_content'],],],],],
                'UTM_medium'  => ['rich_text' => [['text' => ['content' => $data['utm_medium'],],],],],
                'UTM_source'  => ['rich_text' => [['text' => ['content' => $data['utm_source'],],],],],
                'UTM_term'  => ['rich_text' => [['text' => ['content' => $data['utm_term'],],],],],
                'IP_address'  => ['rich_text' => [['text' => ['content' => $data['ip_address'],],],],],
                'Form_Type'  => ['rich_text' => [['text' => ['content' => $data['form_type'],],],],],
                'Page_Route'  => ['rich_text' => [['text' => ['content' => $data['page_route'],],],],],
                //'fbc'  => ['rich_text' => [['text' => ['content' => $data['fbc'],],],],],
            ],
        ];
        if (!empty($data['fbc'])) {
            $data['properties']['fbc'] = ['rich_text' => [['text' => ['content' => $data['fbc']],],],];
        }
        //send data to notion
        (new NotionController())->send($data);
    }
}
