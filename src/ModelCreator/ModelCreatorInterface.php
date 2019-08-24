<?php

namespace League\FactoryMuffin\ModelCreator;

interface ModelCreatorInterface
{
    /**
     * @param string $className
     *
     * @return mixed
     */
    public function create($className);
}
