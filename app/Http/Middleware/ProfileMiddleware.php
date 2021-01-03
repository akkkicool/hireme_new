<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Response;
use App\Models\FreelanceProfile;
use App\Models\Portfolio;

class ProfileMiddleware
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
           
            if(Auth::user()->first_name){

                // role id 2 for customer 3 for freelancer
                  if(Auth::user()->role_id == 3){
                        $data = FreelanceProfile::where('user_id', Auth::user()->id)->first();

                    if(!$data){
                        return redirect()->route('preference');
                    }else{
                        $data = Portfolio::where('user_id', Auth::user()->id)->first();
                        if(!$data){
                            return redirect()->route('portfolio');
                        }else{
                            return $next($request);
                        }
                    }
                    
                  }else{
                     return $next($request);
                  } 
                
            }
            
           return redirect()->route('update_profile');
        }else{
            
           return redirect()->route('login');
        }
        
    }
}
