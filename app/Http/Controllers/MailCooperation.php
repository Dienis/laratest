<?php

namespace App\Http\Controllers;

use App\Http\Requests\CooperationRequest;
use App\Mail\CooperationClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailCooperation extends Controller
{
    public function cooperation(CooperationRequest $request)
    {
        $name = $request->name;
        $tel = $request->tel;

        Mail::to('antialkogol333@gmail.com')->send(new CooperationClass($name, $tel));
        return response()->json(['responseText' => 'Сообщение отправлено!']);
    }
}
