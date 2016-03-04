<?php

namespace Modules\Site\Test;

use Orchestra\Testbench\TestCase as Orchestra;
use Modules\Site\Providers\SiteServiceProvider;

abstract class TestCase extends Orchestra
{
    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            // maybe VainServiceProvider::class is necessary, too?
            SiteServiceProvider::class,
        ];
    }
}