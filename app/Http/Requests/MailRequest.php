<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailRequest extends FormRequest
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
            'name' => [
                'required',
                'min:3',
                'max:50',
                'regex:/^[А-Яа-яЁё\s-_]+$/',
            ],
            'tel' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Напишите Ваше Имя',
            'name.min'=>'Минимум 3 символа',
            'name.regex'=>'Только кириллица',
            'tel.required'=>'Напишите Ваш телефон',
            'tel.numeric'=>'Только цифры',
        ];
    }

}
