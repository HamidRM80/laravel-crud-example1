<?php

namespace Hamidreza\LaravelCrudExample;

use Illuminate\Support\Facades\Facade;

class PostFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'post';
    }
}
