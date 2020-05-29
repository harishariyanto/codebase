<?php

namespace Harishariyanto\Codebase;

use Illuminate\Support\ServiceProvider;

class CodebaseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
        	__DIR__ . '/../publishes/views' 	=> resource_path('views'),
        	__DIR__ . '/../publishes/stubs' 	=> resource_path('stubs'),
        	__DIR__ . '/../publishes/public' 	=> public_path(),
        	__DIR__ . '/../publishes/app' 		=> app_path()
        ]);
    }
}
