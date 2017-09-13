<?php

namespace App\Http\Controllers\AlumnusAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Validator, Input, Redirect; 
use App\Alumnus;

class RegisterController extends Controller
{
    //shows registration form to seller

    protected $redirectPath = 'dashboard';

  public function showRegistrationForm()
  {
      return view('auth.register');
  }

  //Handles registration request for seller
    public function register(Request $request)
    {

       //Validates data
        $this->validator($request->all())->validate();

       //Create seller
        $alumnus = $this->create($request->all());

        //Authenticates seller
        $this->guard()->login($alumnus);

       //Redirects sellers
        return redirect($this->redirectPath);
    }

    //Validates user's Input
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstName' => 'required|max:100',
            'lastName' => 'required|max:100',
            'username' => 'required|max:255|unique:alumni',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    //Create a new seller instance after a validation.
    protected function create(array $data)
    {
        return Alumnus::create([
            'firstName' => $data['firstName'],
            'lastName' => $data['lastName'],
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
        ]);
    }

    //Get the guard to authenticate Seller
   protected function guard()
   {
       return Auth::guard('web_alumnus');
   }
}
