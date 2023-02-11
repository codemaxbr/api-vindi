<?php

namespace Codemaxbr\Vindi\Resources;

use Codemaxbr\Vindi\Resources\Resource;

class PaymentMethods extends Resource
{
    public function all(array $query = [])
    {
        return $this->getRequest("payment_methods", ['query' => $query]);
    }

    public function get($id)
    {
        return $this->getRequest("payment_methods/{$id}");
    }
}
