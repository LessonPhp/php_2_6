<?php

namespace App\Exceptions;

class MultiException extends \Exception
{
    protected $errors = [];

    public function add(\Exception $e)
    {
        $this->errors[] = $e;
    }

    public function all()
    {
        return $this->errors;
    }

    public function empty()
    {
        return empty($this->errors);
    }
}