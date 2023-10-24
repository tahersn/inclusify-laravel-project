<?php

namespace App\Http\Requests;

use \Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{

    public function rules()
    {
        return [
            'description' => ['required', 'max:255'],
        ];
    }
}