<?php

namespace Codemaxbr\Vindi\Facades;

use Illuminate\Support\Facades\Facade;

class Vindi extends Facade
{
    protected static function getFacadeAccessor() {
        return 'Codemaxbr\Vindi';
    }
}