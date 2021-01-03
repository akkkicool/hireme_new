<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class SetTimezoneMiddleware
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
         if(Auth::check()){
            $timezone = Auth::user()->timezone ? Auth::user()->timezone : config('app.timezone');
            date_default_timezone_set($timezone);
         }else{
            $timezone = config('app.timezone');
             date_default_timezone_set($timezone);
         }   
         
          return $next($request);
    }
}
