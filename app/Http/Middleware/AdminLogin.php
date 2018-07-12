<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class AdminLogin
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
        if (!Auth::guard('web')->check()) {
            return redirect('/login');
            //echo 'hi';
        }else{
            
            return $next($request);
        }
    }
}
