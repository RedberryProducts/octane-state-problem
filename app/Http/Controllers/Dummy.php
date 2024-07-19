<?php

namespace App\Http\Controllers;

class Dummy
{
    private $number;

    public function __construct()
    {
        $this->number = 0;
    }

    public function get()
    {
        return $this->number;
    }

    public function inc()
    {
        $this->number++;
    }
}
