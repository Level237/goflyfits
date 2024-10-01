<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StepFourRequest extends FormRequest
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
            'height'=>'required',
            'weight'=>'required',
            'full_shoulder_width'=>'required',
            "size"=>"required",
    "sleeves"=>"required",
    "full_chest"=>"required",
    "waist"=>"required",
    "hips"=>"required",
    "front_shoulder_width"=>"required",
    "back_shoulder_width"=>"required",
    "front_jacket_length"=>"required",
        ];
    }
}
