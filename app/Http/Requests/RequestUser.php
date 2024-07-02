<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestUser extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'min:1', 'max:255'],
            'email' => ['required', 'min:1', 'max:255', 'unique:users,email'],
            'password' => ['required', 'min:1', 'max:255']
        ];
    }
}
