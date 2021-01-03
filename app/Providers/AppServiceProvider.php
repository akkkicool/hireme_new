<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        

        Validator::extend('uniqueMobile', function ($attribute, $value, $parameters, $validator) {

            if (strpos($validator->getData()['country_code'], '+') !== false) {
                $code = $validator->getData()['country_code']; 
            } else {
                $code = '+'.$validator->getData()['country_code']; 
            }
                     $count = DB::table('users')->where('mobile_number', $validator->getData()['mobile_number'])
                                            ->where('country_code',$code)
                                            ->where('id', '!=', $parameters[0])
                                            ->count();
                                     
                return $count === 0;
            });
    }
}
