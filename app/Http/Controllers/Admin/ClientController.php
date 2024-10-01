<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = User::role('enrollee')->orderBy('created_at', 'DESC')->paginate(20);
        return view('admin.clients.index', compact('clients'));
    }
}
