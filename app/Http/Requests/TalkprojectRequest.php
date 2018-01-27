<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TalkprojectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tel' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'tel.required'=>'Напишите Ваш телефон',
            'tel.numeric'=>'Только цифры',
        ];
    }
}
