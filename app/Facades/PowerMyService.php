<?php
namespace App\Facades;
use Illuminate\Support\Facades\Facade;

class PowerMyService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'myservice';
    }
}