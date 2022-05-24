<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RolesAndPermision
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        
        if(Auth::check()){
            if(auth()->user()->status == 0){
                return redirect()->intended(route('login-view'))->with('error', 'Your account is not approved by admin, Wait for admin approval!!');
                
            }else{
                // return redirect()->intended(route('login-users'));
                return $next($request);
            }
        }
    }
}
