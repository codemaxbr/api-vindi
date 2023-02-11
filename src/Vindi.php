<?php

namespace Codemaxbr\Vindi;

use Vindi\Customer;

class Vindi
{
    public $credentials = [];
    public $enviroment = 'sandbox';

    public function __construct()
    {
        $this->credentials = [
            'VINDI_API_KEY' => env('VINDI_API_KEY'),
            'VINDI_API_URI' => env('VINDI_API_URI')
        ];
    }

    public function teste()
    {
        return "poksadopksad";
    }

    public function __call($method, $args = null)
    {
        $class = '\\Codemaxbr\Vindi\Resources\\'. ucfirst($method);

        if (!class_exists($class, true)) {
            throw new \Exception("${$class} not found.");
        }

        return new $class($this->credentials);
    }
}