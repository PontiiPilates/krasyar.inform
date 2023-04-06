<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InformController extends Controller
{
    public function inform(Request $r)
    {

        if ($r->method() == 'POST') {

            $uid = $r->ip();

            $rules = [
                'name' => 'min:3',
                'message' => 'required|min:3',
            ];

            $messages = [
                'message.required' => 'Поле обязательно для заполнения'
            ];

            $validated = $r->validate($rules, $messages);
        }

        $token = 'ххх';
        $token = base64_encode($token);
        $token = 'Basic' . ' ' . $token;

        $response = Http::withHeaders([
            'Authorization' => $token,
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ])->get('http://172.16.10.252/api/newtask', [
            'serviceid' => 591,
            'tasktypeid' => 1503,
        ]);

        dd($response->body());
    }
}

// curl --header "Authorization: Basic U2VyZ2VpTGVzaHVrb3Y6S3RpZXJqZFMxMzAy" http://172.16.10.252/api/newtask?serviceid=591&tasktypeid=1503