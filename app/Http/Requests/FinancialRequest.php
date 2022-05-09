<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FinancialRequest extends FormRequest
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
            'ay' => 'required|string',
            'release' => 'required|string',
            'session' => 'required|string',
            'user' => 'required|string',
        ];

        if($this->type == 'Individual'){
            $rules = array_merge($rules, ['user' => 'required']);
        }else{
            $rules = array_merge($rules, ['user' => 'nullable']);
        }
       
        foreach($this->lists as $key => $staff) {
            if(array_key_exists('benefit', $staff)){
                if($staff['benefit']['name'] == 'Stipend'){
                    $rules = array_merge($rules, ['lists.'.$key.'.flag.0.val.name' => 'required']);
                }else{
                    $rules = array_merge($rules, ['lists.'.$key.'.flag' => 'required']);
                }
                $rules = array_merge($rules, ['lists.'.$key.'.amount.0.val' => 'required']);
            }else{
                $rules = array_merge($rules, ['lists.'.$key.'.benefit' => 'required']);
            }
        }
        return $rules;
    }
}
