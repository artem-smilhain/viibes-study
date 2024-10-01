<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\FAQ;
use App\Models\Review;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    public function index(Request $request)
    {
        (new UtmController())->store_utm_to_session($request);
        $cities = City::take(6)->orderBy('row_weight', 'asc')->get();
        $reviews = Review::take(9)->orderBy('row_weight', 'asc')->get();
        $faq = FAQ::$faq['admission'];
        $universities = University::take(6)->orderBy('row_weight', 'asc')->get();
        return view('client.pages.home', compact(['universities', 'cities', 'reviews', 'faq']));
    }

    public function belarus(Request $request)
    {
        (new UtmController())->store_utm_to_session($request);
        $cities = City::take(6)->orderBy('row_weight', 'asc')->get();
        $reviews = Review::take(9)->orderBy('row_weight', 'asc')->get();
        $faq = FAQ::$belarus;
        $universities = University::take(6)->orderBy('row_weight', 'asc')->get();
        return view('client.pages.countries.belarus', compact(['universities', 'cities', 'reviews', 'faq']));
    }

    public function ukraine(Request $request) //Слава Україні!
    {
        (new UtmController())->store_utm_to_session($request);
        $cities = City::take(6)->orderBy('row_weight', 'asc')->get();
        $reviews = Review::take(9)->orderBy('row_weight', 'asc')->get();
        $faq = FAQ::$faq['admission'];
        $universities = University::take(6)->orderBy('row_weight', 'asc')->get();
        return view('client.pages.countries.ukraine', compact(['universities', 'cities', 'reviews', 'faq']));
    }

}
