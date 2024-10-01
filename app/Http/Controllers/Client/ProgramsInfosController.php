<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\ProgramsInfos;
use Illuminate\Http\Request;

class ProgramsInfosController extends Controller
{
    public function show($slug)
    {
        $program_info = ProgramsInfos::where('slug', $slug)->firstOrFail();
        return view('client.pages.programs-infos.show', compact('program_info'));
    }
}
