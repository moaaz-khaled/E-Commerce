<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class RegisterRequest extends FormRequest
{
    public function authorize(): bool {
        return true;
    }

    public function rules(): array
    {
        return [
            'userName'=> 'required',
            'email'=>'required|unique:users,email',
            'password'=> 'required|min:8',
            'confirmPassword' => 'required|same:password',
        ];
    }

    protected function failedValidation(Validator $validator){
        throw new HttpResponseException(response()
        ->json(['message' => 'Validation errors ignored',], 200));
    }
}
