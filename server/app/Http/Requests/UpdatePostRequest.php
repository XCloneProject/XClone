<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
        if($this->method() == 'PUT'){
            return [
                'content' => ['required'],
                'genre' => ['required'],
                'user_id' => ['required'],
            ];
        }else{
            return [
                'content' => ['sometimes','required'],
                'genre' => ['sometimes','required'],
                'user_id' => ['sometimes','required'],
            ];
        }

    }
}
