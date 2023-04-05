<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformController extends Controller
{
    public function inform(Request $r) {

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
            
            // dump($r->all());
        }

        return view('pages.inform');
    }

}
