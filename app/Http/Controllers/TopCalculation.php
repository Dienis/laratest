<?php

namespace App\Http\Controllers;

use App\Http\Requests\CalculationRequest;
use App\Mail\CalculationClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TopCalculation extends Controller
{
    public function calculation_top(CalculationRequest $request)
    {
        $name = $request->name;
        $tel = $request->tel;
        $email = $request->email;
        $msg = $request->msg;

        Mail::to('antialkogol333@gmail.com')->send(new CalculationClass($name, $tel, $email, $msg));
        return response()->json(['responseText' => 'Сообщение отправлено!']);
    }
}
