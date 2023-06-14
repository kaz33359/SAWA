<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!session()->has('LoggedAdmin') && ($request->path() != 'admin/login_pro')) {
            return redirect('admin/login')->with('fail', 'You must be logged in first ');
        }
        if (session()->has('LoggedAdmin') && ($request->path() == 'admin/login_pro')) {
            return back();
        }
        return $next($request);
    }
}
