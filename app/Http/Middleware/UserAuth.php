<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!session()->has('LoggedUser') && ($request->path() != 'user/login_process' && $request->path() != 'user/registration_process')) {
            return redirect('user/login')->with('fail', 'You must be logged in first ');
        }
        if (session()->has('LoggedUser') && ($request->path() == 'user/login_process' ||  $request->path() == 'user/registration_process')) {
            return back();
        }
        return $next($request);
    }
}
