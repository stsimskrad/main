<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AllotmentRequest extends FormRequest
{
    public function authorize()
    {
        return false;
    }

    public function rules()
    {
        if($this->type == 'Allotment'){
            $rules = [
                'check_no' => 'required|string|max:100',
                'checked_at' => 'required',
                'credited_at' => 'required'
            ];
        }else{
            $rules = [
                'amount' => 'required',
                'expense_id' => 'required',
                'allotment_id' => 'required'
            ];
        }
        return $rules;
    }

    public function messages()
    {
        $message = [
            'check_no.required' => '* required',
            'checked_at.required' => '* required',
            'credited_at.required' => '* required',
            'amount' => '* required',
            'expense_id' => '* requried',
        ];

        return $message;
    }
}
