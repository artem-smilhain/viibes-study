<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Throwable;

class NotionController extends Controller
{
    const NOTION_POST_URL = 'https://api.notion.com/v1/pages';

    public function send($data){
        $secret_token = env('NOTION_SECRET_TOKEN');
        $notion_version = env('NOTION_VERSION');
        try {
            $ch = curl_init();
            curl_setopt_array($ch, [
                CURLOPT_URL            => $this::NOTION_POST_URL,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING       => '',
                CURLOPT_MAXREDIRS      => 10,
                CURLOPT_TIMEOUT        => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST  => 'POST',
                CURLOPT_POSTFIELDS     => json_encode($data),
                CURLOPT_HTTPHEADER     => [
                    'Content-Type: application/json',
                    "Authorization: Bearer {$secret_token}",
                    "Notion-Version: {$notion_version}",
                ],
            ] );
            $result = curl_exec($ch);
            curl_close($ch);
        }
        catch (Throwable $e) {
            \Log::error('NOTION - Curl error: ' . $e->getMessage());
        }
    }
}
