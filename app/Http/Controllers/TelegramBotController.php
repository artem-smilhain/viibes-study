<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TelegramBotController extends Controller
{
    const TELEGRAM_API_URL = 'https://api.telegram.org/bot';

    public function send(string $massage){
        try {
            $url = $this::TELEGRAM_API_URL.env('TELEGRAM_API');
            $url = $url."/sendMessage?chat_id=".env('TELEGRAM_CHAT_ID');
            $url = $url."&parse_mode=MarkdownV2&text=".urlencode($massage);
            $ch = curl_init();
            $optArray = array(CURLOPT_URL => $url, CURLOPT_RETURNTRANSFER => true);
            curl_setopt_array($ch, $optArray);
            $result = curl_exec($ch);
            curl_close($ch);
            //dd($result);
        }
        catch (Throwable $e) {}
    }
}
