<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Adsrequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required', 'unique:ads'],
            'image' => 'sometimes|image|max:5000',
            'description' => 'required',
            'price' => ['numeric', 'required'],
            'localisation' => ['required']
        ];
    }
}
