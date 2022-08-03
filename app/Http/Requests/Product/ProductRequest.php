<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric', 'min:5000', 'max:900000'],
            'stockAmount' => ['required', 'numeric', 'min:1', 'max:500'],
            'image' => ['required', 'max:5000', 'dimensions:width=500,height=500', 'mimes:jpeg,png,jpg'],
            'category_id' => ['required', 'numeric', 'min:1', 'max:6']
        ];
    }

}
