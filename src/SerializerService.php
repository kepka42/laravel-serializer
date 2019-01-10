<?php

namespace kepka42\LaravelSerializer;

use kepka42\LaravelSerializer\Contracts\SerializerContract;
use kepka42\LaravelSerializer\Exceptions\SerializerNotFoundException;
use kepka42\LaravelSerializer\Serializer\SerializerInterface;

/**
 * Class SerializerService
 * @package kepka42\LaravelSerializer
 */
class SerializerService implements SerializerContract
{
    /** @var iterable */
    private $serializers;

    /**
     * @inheritdoc
     */
    public function serialize($object, $params = [])
    {
        // For array
        if (is_array($object)) {
            $result = [];

            foreach ($object as $idx => $element) {
                $result[$idx] = $this->serialize($element, $params);
            }

            return $result;
        }

        if (!is_object($object)) {
            return $object;
        }

        /** @var SerializerInterface $serializer */
        foreach ($this->serializers as $serializer) {
            if ($serializer->isSupports($object)) {
                return $serializer->serialize($object, $params);
            }
        }

        $classInfo = new \ReflectionClass($object);
        $className = $classInfo->getName();

        throw new SerializerNotFoundException("Serializer for serialize {$className} not found");
    }

    /**
     * @inheritdoc
     */
    public function setSerializers(iterable $serializers)
    {
        $this->serializers = $serializers;
    }
}
