<?php namespace app\Facades;

/**
 * Created by PhpStorm.
 * User: dipak
 * Date: 31/1/17
 * Time: 5:36 PM
 */
use Illuminate\Support\Facades\Facade;

class TestProjectFacade extends Facade
{
    public static function getFacadeAccessor() {
        return 'testproject';
    }
}