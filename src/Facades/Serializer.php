<?php

namespace kepka42\LaravelSerializer\Facades;

use Illuminate\Support\Facades\Facade;
use kepka42\LaravelSerializer\Facades\Classes\Serializer as SerializerAccessor;

/**
 * Class Serializer
 * @package kepka42\LaravelSerializer\Facades
 */
class Serializer extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return SerializerAccessor::class;
    }
}
