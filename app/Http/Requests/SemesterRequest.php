<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SemesterRequest extends FormRequest
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
            'academic_year' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
            'semester_id' => 'required',
            'school_id' => 'required'
        ];
    }

    public function messages()
    {
        $message = [
            'academic_year.required' => 'required',
            'start_at.required' => 'required',
            'end_at.required' => 'required',
            'semester_id.required' => 'required',
        ];

        return $message;
    }
}
