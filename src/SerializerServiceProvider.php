<?php

namespace kepka42\LaravelSerializer;

use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use kepka42\LaravelSerializer\Console\SerializerMakeCommand;
use kepka42\LaravelSerializer\Contracts\SerializerContract;
use kepka42\LaravelSerializer\Serializer\SerializerInterface;

/**
 * Class SerializerServiceProvider
 * @package kepka42\LaravelSerializer
 */
class SerializerServiceProvider extends ServiceProvider
{
    /**
     * Boostrap serializer service
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__ . '/../config/' => config_path() . '/']);

        if ($this->app->runningInConsole()) {
            $this->commands([
                SerializerMakeCommand::class
            ]);
        }
    }

    /**
     * Register the Serializer service
     *
     * @return void
     */
    public function register()
    {
        $this->app->tag(config('serializer.serializers'), ['serializers']);

        $this->app->singleton(SerializerContract::class, function (Application $app) {
            $taggedSerializers = $app->tagged('serializers');

            $serializerContract = new SerializerService();

            $serializers = [];
            /** @var SerializerInterface $serializer */
            foreach ($taggedSerializers as $serializer) {
                if ($serializer instanceof SerializerInterface) {
                    $serializer->setSerializeContract($serializerContract);
                    $serializers[] = $serializer;
                }
            }

            $serializerContract->setSerializers($serializers);
            return $serializerContract;
        });
    }
}
