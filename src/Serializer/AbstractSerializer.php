<?php

namespace kepka42\LaravelSerializer\Serializer;

use kepka42\LaravelSerializer\Contracts\SerializerContract;

/**
 * Class AbstractSerializer
 * @package kepka42\LaravelSerializer\Serializer
 */
abstract class AbstractSerializer implements SerializerInterface
{
    /** @var SerializerContract */
    protected $serializerContract;

    /**
     * @inheritdoc
     */
    public function setSerializeContract(SerializerContract $serializerContract)
    {
        $this->serializerContract = $serializerContract;
    }
}
