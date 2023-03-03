<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|min:5|max:100',
            'message' => 'required|min:15|max:100'
        ];
    }

    public function messages() {
        return [
            'name.required' => 'You have to fill your name',
            'email.required' => 'E-mail is wrong',
            'subject.required' => 'Check the name of your topic',
            'message.required' => 'Common, you can do it'
        ];
    }
}
