<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitapplicationRequest;
use App\Mail\SubmitapplicationClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailSubmitApplication extends Controller
{
    public function submit_application(SubmitapplicationRequest $request)
    {
        $tel = $request->tel;
        $material_name = $request->material_name;

        Mail::to('antialkogol333@gmail.com')->send(new SubmitapplicationClass($tel, $material_name));
        return response()->json(['responseText' => 'Сообщение отправлено!']);
    }
}
