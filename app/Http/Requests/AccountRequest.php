<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
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
            'accNo'=>'Required|unique:accounts',
            'accName'=>'Required'
        ];
    }

    public function messages(){
        return [
            'accNo.required' => "can't left empty",
            'accNo.unique'  => 'all ready in used'
        ];
    }
}
