<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePersonalInfoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'user_id'=>'required',
            'full_name'=>'required',
            'email'=>'required , uniqid',
            'phone'=>'required',
            'gender'=>'required',
            'birth_date'=>'required',
            'nationality'=>'required',
            'pasport_id'=>'required',
        ];
    }
}
