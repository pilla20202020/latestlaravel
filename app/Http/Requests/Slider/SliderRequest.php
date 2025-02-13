<?php

namespace App\Http\Requests\Slider;

use Illuminate\Foundation\Http\FormRequest;

class SliderRequest extends FormRequest
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
        $rules = [
            'title' =>'required|string|max:255',
            'caption'=>'nullable|string|max:10000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:5120',
        ];

        return $rules;
    }
}
