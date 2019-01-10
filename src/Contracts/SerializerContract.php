<?php

namespace kepka42\LaravelSerializer\Contracts;

/**
 * Interface SerializerContract
 * @package kepka42\LaravelSerializer\Contracts
 */
interface SerializerContract
{
    /**
     * @param $object
     * @param array $params
     * @return mixed
     */
    public function serialize($object, $params = []);

    /**
     * @param iterable $serializers
     * @return mixed
     */
    public function setSerializers(iterable $serializers);
}
