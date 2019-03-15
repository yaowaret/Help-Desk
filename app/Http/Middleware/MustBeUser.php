<?php

namespace App\Http\Middleware;

use Closure;

class MustBeUser
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
        $user = $request->user();
        if($user && $user->status == '0'){
            return $next($request);
        }
        abort(403);
    }
}