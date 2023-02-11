<?php

namespace Codemaxbr\Vindi\Resources;

class Customers extends Resource
{
    private $resource = 'customers';

    public function all($query = [])
    {
        return $this->getRequest($this->resource, ['query' => $query]);
    }

    public function create(array $params)
    {
        $request = $this->postRequest($this->resource, ['json' => $params]);
        return $request->customer;
    }

    public function get($id)
    {
        return $this->getRequest(`${this->resource}/${$id}`);
    }

    public function delete($id)
    {
        return $this->deleteRequest(`${this->resource}/${$id}`);
    }

    public function update($id, array $params)
    {
        return $this->putRequest(`${this->resource}/${$id}`, ['json' => $params]);
    }

    public function unarchive($id)
    {
        return $this->postRequest(`${this->resource}/${$id}/unarchive`);
    }
}