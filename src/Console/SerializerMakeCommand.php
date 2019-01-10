<?php

namespace kepka42\LaravelSerializer\Console;

use Illuminate\Console\GeneratorCommand;
use kepka42\LaravelSerializer\Contracts\SerializerContract;

/**
 * Class SerializerMakeCommand
 * @package kepka42\LaravelSerializer\Console
 */
class SerializerMakeCommand extends GeneratorCommand
{
    protected $name = 'make:serializer';

    protected $description = 'Create a new Serializer class';

    protected $type = SerializerContract::class;

    /**
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/stubs/Serializer.stub';
    }

    /**
     * @param string $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Serializers';
    }
}
