<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use Location;
use Throwable;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function get_user_location($ip) {
        $user_location = [
            'countryCode' => null,
            'cityName'    => null,
            'postalCode'  => null
        ];
        try {
            $location = Location::get($ip);

            if ($location) {
                $user_location = array_merge($user_location, [
                    'countryCode' => $location->countryCode,
                    'cityName'    => $location->cityName,
                    'postalCode'  => $location->postalCode
                ]);
            }
        } catch (Throwable $e) {
            \Log::error('Error getting user location: ' . $e->getMessage());
        }
        return $user_location;
    }
    public function get_banner_substring($ip_country){
        return match ($ip_country) {
            'UA' => "из Украины",
            'BY' => "из Беларуси",
            'KZ' => "из Казахстана",
            default => "",
        };
    }
}
