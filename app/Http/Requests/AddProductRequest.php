<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddProductRequest extends FormRequest
{
    public function authorize(): bool {
        return true;
    }

    public function rules(): array
    {
        return [
            'productName'=> 'required',
            'Description'=> 'required',
            'costPrice'=> 'required',
            'sellingPrice'=> 'required',
            'stock'=> 'required',
        ];
    }
}
