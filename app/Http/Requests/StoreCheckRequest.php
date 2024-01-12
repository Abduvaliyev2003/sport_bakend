<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\File;

class StoreCheckRequest extends FormRequest
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
            'direction_id'=>'required',
            'direction_category_id'=>'required',
            'direction_category_name'=>'required',
            'direction_category_name_answer'=>'required',
            'score'=>'nullable',
            'pdf'=>["nullable", File::types('pdf')],
            'admin_permission'=>'nullable',
            'messages'=>'nullable',
        ];
    }
}
