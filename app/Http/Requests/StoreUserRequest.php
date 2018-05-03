<?php

namespace EddiesBlog\Http\Requests;

use EddiesBlog\Http\Requests\Request;

class StoreUserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     *  IE: Roles like admin or user etc. permissions
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
     * Form validation like is this a word / letter,
     *  is it empty etc etc.
     * 
     * @return array
     */
    public function rules()
    {
        return [
            //the name field on our forms is manditory
            'name' => ['required'],
            //email is manditory, must be valid email, and unique to other emails in users table
            'email' => ['required', 'email', 'unique:users'],
            //password is manditory and will be confirmed via password_confirmed fields.
            'password' => ['required', 'confirmed']
        ];
    }
}
