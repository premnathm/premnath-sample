<?php
namespace Premnath\Sample;

use \Illuminate\Support\ServiceProvider;

class SampleServiceProvider extends ServiceProvider
{

    public function register()
    {

    }

    public function boot()
    {
           // dd('Hi');
        //route customization
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
         //view customization
            $this->loadViewsFrom(__DIR__.'/resource/views','customviewsblade');

            $this->publishes([
                __DIR__.'/path/config/sample.php' => config_path('sample.php'),
              ]);
    }
}
