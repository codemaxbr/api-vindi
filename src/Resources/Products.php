<?php

namespace Codemaxbr\Vindi\Resources;

use Codemaxbr\Vindi\Resources\Resource;

class Products extends Resource
{
    public function all(array $query = [])
    {
        return $this->getRequest("products", ['query' => $query]);
    }

    public function create(array $params)
    {
        $request = $this->postRequest("products", ['json' => $params]);
        return $request->product;
    }

    public function get($id)
    {
        return $this->getRequest("products/{$id}");
    }

    public function update($id, array $params)
    {
        return $this->putRequest("products/{$id}", ['json' => $params]);
    }
}
