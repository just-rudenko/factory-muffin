<?php

namespace League\FactoryMuffin\ParameterSetter;

use League\FactoryMuffin\FactoryMuffin;

final class ByMethodParameterSetter implements ParameterSetterInterface
{

    /**
     * @param object $model
     * @param string $key
     * @param mixed $value
     *
     * @return void
     */
    public function set($model, $key, $value)
    {
        $setter = 'set'.ucfirst(FactoryMuffin::camelize($key));

        // check if there is a setter and use it instead
        if (method_exists($model, $setter) && is_callable([$model, $setter])) {
            $model->$setter($value);
        } else {
            $model->$key = $value;
        }
    }
}
