<?php

namespace League\FactoryMuffin\ModelCreator;

class WithoutConstructorModelCreator implements ModelCreatorInterface
{
    /**
     * {@inheritdoc}
     */
    public function create($className)
    {
        $reflection = new \ReflectionClass($className);
        return $reflection->newInstanceWithoutConstructor();
    }
}
