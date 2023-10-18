<?php
namespace SideshowTgrove\LaravelTypeForm;

use Illuminate\Support\ServiceProvider;

class TypeFormServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * boot
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__.'/config/typeform.php' => config_path('typeform.php')]);
    }
    
    /**
     * regirster
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(TypeForm::class, function () {
            return new TypeForm();
        });

        $this->app->alias(TypeForm::class, 'TypeForm');
        // Default Package Configuration
        $this->mergeConfigFrom(__DIR__.'/config/typeform.php', 'typeform');
    }
}
