<?php

namespace EddiesBlog\Http\Requests;

use EddiesBlog\Http\Requests\Request;

class DeleteUserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
       
        //if a user is trying to delete them self we return false
        //to the isAuthorised function
        // by comparing to the logged in user id or auth ID to the 
        // proposed user id (?) to delete /?/confirm/
        if($this->route('users') == auth()->user()->id)
        {
            return false;
        }

        //otherwise we are ok to delete the user
        return true;
    }

    /*
     *  ForbiddenResponse() is a method from the Request class
     *  that can be overridden for personalising a error message 
     *  when users are not authorised to see a page.
     */
    
    public function ForbiddenResponse()
    {
        return redirect()->back()->withErrors([
                'error' => 'You are not able to delete your own account!'
            ]);
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [];
    }
}
