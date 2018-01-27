<?php

namespace App\Http\Controllers;

use App\Http\Requests\TalkprojectRequest;
use App\Mail\TalkprojectClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailTalkProject extends Controller
{
    public function talk_project(TalkprojectRequest $request)
    {
        $tel = $request->tel;

        Mail::to('antialkogol333@gmail.com')->send(new TalkprojectClass($tel));
        return response()->json(['responseText' => 'Сообщение отправлено!']);
    }
}
