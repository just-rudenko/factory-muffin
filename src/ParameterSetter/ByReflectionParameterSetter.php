<?php

namespace League\FactoryMuffin\ParameterSetter;

final class ByReflectionParameterSetter implements ParameterSetterInterface
{
    /**
     * {@inheritdoc}
     */
    public function set($model, $key, $value)
    {
        $reflection = new \ReflectionProperty(get_class($model), $key);
        $reflection->setAccessible(true);
        $reflection->setValue($model, $value);
    }
}
