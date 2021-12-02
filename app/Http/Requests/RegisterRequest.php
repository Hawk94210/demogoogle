<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:25',
            'name' => 'required'    
        ];
    }

    public function message()
    {
        return [
            'email.required' => 'Vui lòng nhập email!',
            'email.unique' => 'Email đã có người sử dụng!',
            'password.required' => 'Vui lòng nhập mật khẩu!',
            'password.min' => 'Mật khẩu ít nhất 6 kí tự',
        ];
    }
}
