<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class WebinarController extends Controller
{
    public function index(Request $request)
    {
        (new UtmController())->store_utm_to_session($request);
        $reviews = Review::take(9)->orderBy('row_weight', 'asc')->get();
        return view('client.pages.webinar', compact(['reviews']));
    }
}
