<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CuisineRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'cuisine_name' => 'required|string',
            'description' => 'required|string',
            'ingredients' => 'required|string',
            'recipe' => 'required|string',
            'photo' => 'file|image|mimes:jpeg,png,jpg',
            'video' => 'required|string',
        ];
    }
}
