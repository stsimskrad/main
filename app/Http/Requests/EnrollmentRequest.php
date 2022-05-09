<?php

namespace App\Http\Requests;

use Hashids\Hashids;
use App\Models\ScholarEnrollment;
use Illuminate\Foundation\Http\FormRequest;

class EnrollmentRequest extends FormRequest
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

    public function rules()
    {
        $hashids = new Hashids('krad',10);
        $scholar_id = $hashids->decode($this->scholar_id);
        $scholar_id = $scholar_id[0];

        // $data = ScholarEnrollment::where('scholar_id',$scholar_id)->where('is_clear',0)->count();
        // if($data > 0){
        //     return '';
        // }
        
        return [
            'academic_year' => 'sometimes|required|string',
            'level_id' => 'sometimes|required|integer',
            'semester_id' => 'sometimes|required|integer|unique:scholar_enrollments,semester_id,NULL,'.$this->id.',level_id,'.$this->level_id.',scholar_id,'.$scholar_id,
            'scholar_id' => 'sometimes|required',
            'start_at' => 'sometimes|required|date',
            'end_at' => 'sometimes|required|date',
            'subcourse' => 'sometimes|required|integer',
            'lists' => 'sometimes|required|min:1',
            'is_locked' => 'sometimes|required|integer',
            'files.*' => 'sometimes|required|mimes:pdf,docx|max:2000'
        ];
    }

    public function messages()
    {
        $message = [
            'semester_id.unique' => 'Already Submitted',
        ];

        return $message;
    }
}
