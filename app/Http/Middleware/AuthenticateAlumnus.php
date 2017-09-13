<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class AuthenticateAlumnus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //If request does not comes from logged in seller
       //then he shall be redirected to Seller Login page
       if (! Auth::guard('web_alumnus')->check()) {
           return redirect('/alumnus_login');
       }

       return $next($request);
    }
}