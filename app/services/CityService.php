<?php


namespace App\services;


use App\Models\City;

class CityService
{
    public function delete(City $city)
    {
        $city->delete();
    }
}
