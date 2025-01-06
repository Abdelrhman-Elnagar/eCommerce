<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'name_ar'=>'required',
            'name_en'=>'required',
            'slug'=>'required|lowercase',
            'description_ar'=>'required',
            'description_en'=>'required',
            'picture'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
            // 'showen'=>'required',
            // 'offer'=>'required',

        ];
    }
}
