<?php

namespace App\Http\Requests\admin\login;

use Illuminate\Foundation\Http\FormRequest;

class loginRequest extends FormRequest
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
            //'name'=>['required','string','max:100'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ];
    }
}
