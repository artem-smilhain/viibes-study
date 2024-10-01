<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(Request $request)
    {
        $faq = FAQ::$faq;
        $breadcrumbs = [
            'FAQ' => route('faq')
        ];
        return view('client.pages.faq', compact(['faq', 'breadcrumbs']));
    }
}
