<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
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
        if(auth()->check() && $request->user()->status == 0){
            return redirect()->guest('home');
        }
        return $next($request);
    }
    // public function handle($request, Closure $next){
    //     $user =$request->user();
    //     if($user&& $user->status=='0'){
    //         return $next($request);
    //     }
    //     abort(403.);
    // }

}

