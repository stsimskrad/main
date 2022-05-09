<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'course_id' => 'required',
            'type' => 'nullable|string|max:100|unique:school_courses,type,NULL,'.$this->id.',school_id,'.$this->school_id,'course_id,'.$this->course_id,
            'years' => 'required'
        ];
    }
}
