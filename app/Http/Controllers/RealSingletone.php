<?php

namespace App\Http\Controllers;

class RealSingleton
{
    static protected $instance = null;
    private $date;

    protected function __construct($date)
    {
        $this->date = $date;
    }

    public static function getInstance()
    {
        if (static::$instance == null) {
            static::$instance = new RealSingleton(now());
        }

        return static::$instance;
    }

    public function get()
    {
        return $this->date;
    }
}
