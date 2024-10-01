<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(Request $request)
    {
        $reviews = Review::orderBy('row_weight', 'asc')->get();
        $faq = FAQ::$faq['admission'];
        $breadcrumbs = [
            'Отзывы' => route('reviews')
        ];
        return view('client.pages.reviews', compact(['reviews', 'faq', 'breadcrumbs']));
    }
}
