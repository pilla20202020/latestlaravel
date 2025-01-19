<?php

namespace App\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'title' => 'required'
        ];
    }

    public function data()
    {
        $data = [
            'title'    => $this->get('title'),
            'content'      => $this->get('content'),
            'short_description'      => $this->get('short_description'),
            'is_featured' => ($this->get('is_featured') ? $this->get('is_featured') : '') == 'on' ? '1' : '0'

        ];

        if ($this->has('publish'))
        {
            $data['is_published'] = true;
        }

        return $data;
    }
}
