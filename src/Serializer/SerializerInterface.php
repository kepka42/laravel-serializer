<?php

namespace kepka42\LaravelSerializer\Serializer;

use kepka42\LaravelSerializer\Contracts\SerializerContract;

/**
 * Interface SerializerInterface
 * @package kepka42\LaravelSerializer\Serializer
 */
interface SerializerInterface
{
    /**
     * @param $object
     * @param array $params
     * @return mixed
     */
    public function serialize($object, $params = []);

    /**
     * @param $object
     * @return bool
     */
    public function isSupports($object): bool;

    /**
     * @param SerializerContract $serializerContract
     * @return mixed
     */
    public function setSerializeContract(SerializerContract $serializerContract);
}
