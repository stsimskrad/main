<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReleaseRequest extends FormRequest
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
            'month_id' => 'required',
            'lists' => 'required|min:1',
            'dv' => 'required',
            'dv_no' => 'required_if:dv,true',
            'total' => 'required'
        ];
    }
}
