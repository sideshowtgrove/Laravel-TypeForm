<?php
namespace SideshowTgrove\LaravelTypeForm\Test;

use SideshowTgrove\LaravelTypeForm\TypeFormFacade;
use SideshowTgrove\LaravelTypeForm\TypeFormServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    /**
     * Load package service provider
     * @param  \Illuminate\Foundation\Application $app
     * @return RosiersRobin\TypeForm\TypeFormServiceProvider
     */
    protected function getPackageProviders($app)
    {
        return [TypeFormServiceProvider::class];
    }
    /**
     * Load package alias
     * @param  \Illuminate\Foundation\Application $app
     * @return array
     */
    /*protected function getPackageAliases($app)
    {
        return [
            'TypeForm' => TypeFormFacade::class,
        ];
    }*/
}
