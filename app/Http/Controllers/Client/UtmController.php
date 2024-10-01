<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class UtmController extends Controller
{
    public function store_utm_to_session(Request $request){
        $queries = [
            'utm_source' => $request->query('utm_source'),
            'utm_medium' => $request->query('utm_medium'),
            'utm_campaign' => $request->query('utm_campaign'),
            'utm_content' => $request->query('utm_content'),
            'utm_term' => $request->query('utm_term'),
            //'fbc' => $this->get_fbc($request),
            //'fbp' => $this->get_fbp($request),
        ];
        foreach ($queries as $key => $value){
            $this->save_query_to_utm($key, $value);
        }
    }
    public function save_query_to_utm($key, $value){
        if ($value !== null){
            Session::put($key, $value);
        }
    }
    /*private function get_fbc(Request $request) {
        $fbp = $request->cookie('_fbс');
        return $fbp !== null ? $fbp : null;
    }
    function get_fbp(Request $request): array|string|null
    {
        $fbp = $request->cookie('_fbp');
        return $fbp !== null ? $fbp : null;
    }*/
}
