<?php

namespace Codemaxbr\Vindi\Resources;

use Codemaxbr\Vindi\Resources\Resource;

class Discounts extends Resource
{
    public function create($params)
    {
        return $this->postRequest("discounts", ['json' => $params]);
    }

    public function get($id)
    {
        return $this->getRequest("discounts/{$id}");
    }

    public function delete($id)
    {
        return $this->deleteRequest("discounts/{$id}");
    }
}
