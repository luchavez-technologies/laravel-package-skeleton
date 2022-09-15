<?php

namespace :uc:vendor\:uc:package\Providers;

use Fligno\StarterKit\Providers\BaseStarterKitServiceProvider as ServiceProvider;
use :uc:vendor\:uc:package\Services\:uc:package;

/**
 * Class :uc:packageServiceProvider
 *
 * @author :author_name <:author_email>
 */
class :uc:packageServiceProvider extends ServiceProvider
{
    protected array $commands = [];

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        parent::boot();
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../../config/:lc:package.php', ':lc:package');

        // Register the service the package provides.
        $this->app->singleton(':lc:package', function ($app) {
            return new :uc:package;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        return [':lc:package'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../../config/:lc:package.php' => config_path(':lc:package.php'),
        ], ':lc:package.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/:lc:vendor'),
        ], ':lc:package.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/:lc:vendor'),
        ], ':lc:package.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/:lc:vendor'),
        ], ':lc:package.views');*/

        // Registering package commands.
         $this->commands($this->commands);
    }
}
