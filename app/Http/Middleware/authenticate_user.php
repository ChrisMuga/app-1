<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class authenticate_user
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
        if (Auth::check())
        {
            return $next($request);
        }
        else
        {
            return redirect('/')
                        ->with('msg',"Cannot view users because you're not logged in");
        }
       
        
        
    }
}
