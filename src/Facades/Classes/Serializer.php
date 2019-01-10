<?php

namespace kepka42\LaravelSerializer\Facades\Classes;

use kepka42\LaravelSerializer\Contracts\SerializerContract;

/**
 * Class Serializer
 * @package kepka42\LaravelSerializer\Facades\Classes
 */
class Serializer
{
    /** @var SerializerContract */
    private $serializerContract;

    /**
     * Serializer constructor.
     * @param SerializerContract $serializerContract
     */
    public function __construct(SerializerContract $serializerContract)
    {
        $this->serializerContract = $serializerContract;
    }

    /**
     * @param $object
     * @param array $params
     * @return mixed
     */
    public function serialize($object, $params = [])
    {
        return $this->serializerContract->serialize($object, $params);
    }
}
