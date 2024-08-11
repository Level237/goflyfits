<?php

namespace App\Http\Requests;

use App\Models\Clothing;
use Illuminate\Foundation\Http\FormRequest;

class ClothingRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'title' => ['required', 'string','max:255', 'unique:'.Clothing::class],
            'description'=>['required','string'],
            "price"=>['required'],
            'size'=>['required'],
            "town_id"=>['required'],
            "brand_id"=>['required'],
            'categories'=>"required",
            "image"=>"required|image|mimes:jpg",
            'gender'=>['required']
        ];
    }
}
