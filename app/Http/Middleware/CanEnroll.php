<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CanEnroll
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
        // First user login check
        if (auth()->check()) {
          //then check role is admin or not if admin user can not buy course
            if (auth()->user()->role !== 'a') {
                return $next($request);
            }
        }


        return redirect('/')->with('error', 'You do not have permission to enroll in courses.');
    }
}
