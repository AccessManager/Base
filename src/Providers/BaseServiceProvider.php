<?php

namespace AccessManager\Base\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class BaseServiceProvider extends ServiceProvider
{

    public function boot()
    {
        /*
         * Register Service Providers.
         */
        $this->registerServiceProviders();

        /*
         * Register Alises for Facade classes.
         */
        $this->registerAliases();

        /*
         * Load other resources.
         */
        $this->loadResources();

        /*
         * Set default string length for MySQL Queries.
         */
        Schema::defaultStringLength(191);
    }

    protected function registerServiceProviders()
    {
        $providersArray = require __DIR__ .  "/../Config/serviceproviders.php";

        foreach ($providersArray as $serviceProvider )
        {
            $this->app->register( $serviceProvider );
        }
    }

    protected function registerAliases()
    {
        $loader = AliasLoader::getInstance();
        $aliases = require __DIR__ . "/../Config/aliases.php";

        foreach ($aliases as $alias => $class )
        {
            $loader->alias($alias, $class);
        }
    }

    protected function loadResources()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');
        $this->loadViewsFrom(__DIR__ .'/../Views', 'Base');
    }
}