<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
use App\Models\Review;
use App\Models\Service;
use App\Models\University;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        $universities = University::take(6)->orderBy('row_weight', 'asc')->get();
        $reviews = Review::take(9)->orderBy('row_weight', 'asc')->get();
        $faq = FAQ::$faq['admission'];
        $additional_services = Service::$additional_services;
        $country = (new Controller())->get_user_location($request->ip())['countryCode'];
        $ip = $country == 'UA';
        $breadcrumbs = [
            'Услуги и стоимость' => route('services')
        ];
        return view('client.pages.services.index', compact(['universities', 'reviews', 'faq', 'additional_services', 'ip', 'breadcrumbs']));
    }

    public function standard(Request $request){
        $name = 'STANDARD';
        $price = '1890';
        $breadcrumbs = [
            'Услуги и стоимость' => route('services'),
            'Тариф услуг «'.$name.'»' => route('services.standard')
        ];
        return view('client.pages.services.standard', compact(['breadcrumbs', 'name', 'price']));
    }

    public function comfort(Request $request){
        $name = 'COMFORT';
        $price = '2590';
        $breadcrumbs = [
            'Услуги и стоимость' => route('services'),
            'Тариф услуг «'.$name.'»' => route('services.comfort')
        ];
        return view('client.pages.services.comfort', compact(['breadcrumbs', 'name', 'price']));
    }
}
