<?php
namespace SideshowTgrove\LaravelTypeForm;

use Illuminate\Support\Facades\Facade;

class TypeFormFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'TypeForm';
    }
}
