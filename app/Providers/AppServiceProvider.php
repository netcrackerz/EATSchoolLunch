<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Schema\Blueprint;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       /*   view()->composer('partials.nav', function($view){
            
            $view->with('latest',\App\Article::latest()->first());
        });*/
   //       view()->share('AdultIncomeType', \App\AdultIncomeType::all());
   //       view()->share('PayFrequency', \App\PayFrequency::all());
/*
if (Schema::hasTable('adult_income_types'))
{
    view()->share('AdultIncomeType', \App\AdultIncomeType::all());
}
if (Schema::hasTable('pay_frequencies'))
{
     view()->share('PayFrequency', \App\PayFrequency::all());
}*/
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
