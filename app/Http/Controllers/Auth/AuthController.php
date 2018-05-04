<?php

namespace EddiesBlog\Http\Controllers\Auth;

use EddiesBlog\User;
use EddiesBlog\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
 

    use AuthenticatesUsers;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->redirectAfterLogout = route('auth.login');
        $this->redirectTo = route('backend.dashboard');

        $this->middleware('guest', ['except' => 'getLogout']);
    }

   
}
