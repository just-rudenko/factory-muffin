<?php

namespace League\FactoryMuffin\ParameterSetter;

interface ParameterSetterInterface
{
    /**
     * @param object $model
     * @param string $key
     * @param mixed $value
     *
     * @return void
     */
    public function set($model, $key, $value);
}
