<?php

namespace tencentIm\Hasher;

use Illuminate\Support\ServiceProvider;

class TencentImProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('test',function(){
            return new test();
        });
    }
}
