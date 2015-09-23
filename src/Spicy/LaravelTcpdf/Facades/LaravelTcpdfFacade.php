<?php namespace Spicy\LaravelTcpdf\Facades;

use Illuminate\Support\Facades\Facade;

class LaravelTcpdfFacade extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'pdf';
    }

}