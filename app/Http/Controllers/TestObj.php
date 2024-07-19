<?php

namespace App\Http\Controllers;

class TestObj
{
    private $date;
    private $object;

    public function __construct($object)
    {
        $this->date = now();
        $this->object = $object;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getObj()
    {
        return $this->object;
    }
}
