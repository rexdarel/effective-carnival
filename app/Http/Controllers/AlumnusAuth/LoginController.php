<?php

namespace App\Http\Controllers\AlumnusAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
	 //Where to redirect seller after login.
    protected $redirectTo = '/dashboard';
    //Trait
    use AuthenticatesUsers;

    //Custom guard for seller
    protected function guard()
    {
      return Auth::guard('web_alumnus');
    }

    //Shows seller login form
   public function showLoginForm()
   {
       return view('auth.login');
   }
}
