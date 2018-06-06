<?php

namespace App;


trait TraitV
{
    protected $data = [];

    /**
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {

        $this->data[$name] = $value;
    }

    /**
     * @param $name
     * @return null
     */
    public function __get($name)
    {
        if (isset($this->data[$name])) {
            return $this->data[$name];
        }
        return null;
    }

    /**
     * @param $name
     * @return bool
     */
    public function isset($name)
    {
        return isset($this->data[$name]);
    }
}