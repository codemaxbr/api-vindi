<?php

namespace Codemaxbr\Vindi\Resources;

use Codemaxbr\Vindi\Resources\Resource;

class Usages extends Resource
{
    public function create(array $params)
    {
        return $this->postRequest("usages", ['json' => $params]);
    }

    public function delete($id)
    {
        return $this->deleteRequest("usages/{$id}");
    }
}
