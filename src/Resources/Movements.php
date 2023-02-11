<?php

namespace Codemaxbr\Vindi\Resources;

use Codemaxbr\Vindi\Resources\Resource;
/**
 *
 */
class Movements extends Resource
{
    public function create(array $params)
    {
        return $this->postRequest("movements", ['json' => $params]);
    }
}
