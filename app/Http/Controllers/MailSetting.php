<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailRequest;
use App\Mail\MailClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailSetting extends Controller
{
    public function contactform(MailRequest $request)
    {
        $name = $request->name;
        $tel = $request->tel;
        $material = $request->material;

        Mail::to('antialkogol333@gmail.com')->send(new MailClass($name, $tel, $material));
        return response()->json(['responseText' => 'Сообщение отправлено!']);
    }
}
