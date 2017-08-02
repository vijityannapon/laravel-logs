<?php

namespace Vijityannapon\Logs;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class LogsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {

        $configPath = __DIR__.'/../config/logs.php';
        $this->publishes([
            $configPath => config_path('logs.php'),
        ]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerLogs();
        $this->registerFacade();
    }

    /**
     * Register logs.
     *
     * @return void
     */
    protected function registerLogs()
    {
        $this->app->singleton('logs', function($app)
        {
            $config = $this->app->config->get('logs');

            if ($config['provider'] == 'loggly') {
                return new Adapters\Loggly();
            } elseif ($config['provider'] == 'stackdriver') {
                return new Adapters\Stackdriver();
            } else {
                return new Adapters\Monolog();
            }
            
        });
    }
    /**
     * Register facade.
     *
     * @return void
     */
    protected function registerFacade()
    {
        $this->app->booting(function()
        {
            $loader = AliasLoader::getInstance();
            $loader->alias('Logs', 'Vijityannapon\Logs\Facades\Logs');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array('logs');
    }

}