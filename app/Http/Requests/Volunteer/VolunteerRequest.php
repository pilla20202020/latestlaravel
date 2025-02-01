<?php

namespace App\Http\Requests\Volunteer;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
class VolunteerRequest extends FormRequest
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

    public function volunteerFillData()
    {
        $data = [
            'title'    => $this->get('title'),
            'slug' => Str::slug($this->get('title')),
            'content'      => $this->get('content'),
            'meta_description'      => $this->get('meta_description'),
            'position' => $this->get('position'),
        ];

        if ($this->has('publish'))
        {
            $data['is_published'] = true;
        }

        return $data;
    }
}

