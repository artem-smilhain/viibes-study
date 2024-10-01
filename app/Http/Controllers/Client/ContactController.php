<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $breadcrumbs = [
            'Наши контакты' => route('contacts')
        ];
        return view('client.pages.contacts', compact('breadcrumbs'));
    }
}
