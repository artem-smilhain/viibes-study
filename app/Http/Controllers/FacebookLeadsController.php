<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;
use FacebookAds\Object\ServerSide\Content;
use FacebookAds\Object\ServerSide\CustomData;
use FacebookAds\Object\ServerSide\DeliveryCategory;
use FacebookAds\Object\ServerSide\Event;
use FacebookAds\Object\ServerSide\EventRequest;
use FacebookAds\Object\ServerSide\Gender;
use FacebookAds\Object\ServerSide\UserData;

class FacebookLeadsController extends Controller
{
    private const TOKEN = 'EAAKIzLa3YQsBOw6GMmnBWBsryO1eDydiSIWBps9X3OUUyOKPrZAHrlxOaIQJuLoJdnkb5cDocZARTvtNbDrjJsLf69JKo9eKKZBe6nQEmuap3fos1QxPplF4IBrM0E7QybvcANZAgWFUfGZCgmoQYlmZBQkIZByXJR8uSWD169li8N00yp4oLBw5E5d990oHQZDZD';
    private const PIXEL_ID = '497630075718869';

    public function sendFbEvent($data): bool
    {
        try {
            $this->validateConfig();
            $api = $this->initApi();

            $userData = $this->createUserData($data);
            $event = $this->createEvent($userData);

            $request = (new EventRequest(self::PIXEL_ID))
                ->setEvents([$event]);

            //если это не продакшн - добавить код для FB теста
            if (config('app.env') !== 'production') {
                $request->setTestEventCode('TEST15596');
            }

            $request->execute();
        } catch (\Exception $e) {
            \Log::error('Failed to send Facebook event: ' . $e->getMessage());
            return false;
        }

        return true;
    }

    private function validateConfig()
    {
        if (is_null(self::TOKEN) || is_null(self::PIXEL_ID)) {
            throw new \Exception('You must set your access token and pixel id before executing');
        }
    }

    private function initApi()
    {
        Api::init(null, null, self::TOKEN);
        $api = Api::instance();
        $api->setLogger(new CurlLogger());

        return $api;
    }

    private function createUserData($data)
    {
        $userData = (new UserData())
            ->setFirstName(hash('sha256', $data['name']))
            ->setPhone(hash('sha256', $data['phone']));

        $this->addUserData($userData, 'ip', $data, 'setClientIpAddress');
        $this->addUserData($userData, 'user_agent', $data, 'setClientUserAgent');
        $this->addUserData($userData, 'fbp', $data, 'setFbp');
        $this->addUserData($userData, 'fbc', $data, 'setFbc');
        $this->addUserData($userData, 'countryCode', $data['user_location'], 'setCountryCode', true);
        $this->addUserData($userData, 'cityName', $data['user_location'], 'setCity', true);
        $this->addUserData($userData, 'postalCode', $data['user_location'], 'setZipCode', true);

        return $userData;
    }

    private function addUserData($userData, $key, $data, $method, $hash = false)
    {
        if (!empty($data[$key])) {
            $value = $hash ? hash('sha256', $data[$key]) : $data[$key];
            $userData->$method($value);
        }
    }

    private function createEvent($userData)
    {
        return (new Event())
            ->setEventName('Lead')
            ->setEventTime(time())
            ->setUserData($userData)
            ->setCustomData(new CustomData())
            ->setActionSource('website');
    }
}
