<?php

namespace Modules\Site\Providers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class ConfigServiceProvider extends ServiceProvider
{
    /**
     * Overwrite any vendor / package configuration.
     *
     * This service provider is intended to provide a convenient location for you
     * to overwrite any "vendor" or package configuration that you may want to
     * modify before the application handles the incoming request / command.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../Config/site.php', 'site'
        );
    }
}
