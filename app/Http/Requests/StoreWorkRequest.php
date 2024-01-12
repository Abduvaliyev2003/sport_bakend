<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWorkRequest extends FormRequest
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
            'region_id'=>'required',
            'district'=>'required',
            'work_place'=>'required',
            'faculty'=>'required',
            'cafedra'=>'required',
            'position'=>'required',
            'work_name'=>'required',
            'work_phone'=>'nullable',
            'date_start'=>'required',
            'date_end'=>'required',
        ];
    }
}
