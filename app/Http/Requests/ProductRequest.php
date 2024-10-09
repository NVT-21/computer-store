<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'stock' => 'required|integer',
            'price' => 'required|integer',
            'sale_price' => 'nullable|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'The product name is required.',
            'name.string' => 'The product name must be a string.',
            'name.max' => 'The product name may not be greater than 255 characters.',
            
            'stock.required' => 'The stock quantity is required.',
            'stock.integer' => 'The stock quantity must be an integer.',
            
            'price.required' => 'The price is required.',
            'price.integer' => 'The price must be an integer.',
            
            'sale_price.integer' => 'The sale price must be an integer.',
            
            
            'category_id.required' => 'The category is required.',
            'category_id.exists' => 'The selected category is invalid.',
        ];
    }
}
