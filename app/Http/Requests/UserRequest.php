<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UserRequest extends FormRequest
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
            'name' => 'required|between:3,25|regex:/^[A-Za-z0-9\-\_]+$/|unique:users,name,' . Auth::id(),
            'email' => 'required|email',
            'intriduction' => 'max:80',
            'avatar' => 'mimes:jpeg,bmp,png,gif,jpg|dimensions:min_width=208,min_height=208',
        ];
    }

    public function attributes()
    {
        return [
            'name' => '用户名',
            'avatar' => '头像',
        ];
    }
}
