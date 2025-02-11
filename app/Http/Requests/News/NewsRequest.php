<?php

namespace App\Http\Requests\News;
use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'type' => 'required',
            'content' => 'nullable|string|max:10000',
            'meta_description' => 'nullable|string|max:500',
            'image' => 'required|image|mimes:jpeg,png,jpg,svg|max:5120',
        ];

        return $rules;
    }

    public function newsFillData(){


        $inputs=[
            'title' => $this->get('title'),
            'slug' => Str::slug($this->get('title')),
            'meta_description'=> $this->get('meta_description'),
            'content'   => $this->get('content'),
            'date' => $this->get('date'),
            'type' => $this->get('type'),
        ];

        return $inputs;
    }
}
