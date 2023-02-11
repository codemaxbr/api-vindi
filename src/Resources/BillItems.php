<?php

namespace Codemaxbr\Vindi\Resources;

use Codemaxbr\Vindi\Resources\Resource;
/**
 *
 */
class BillItems extends Resource
{
    public function get($id)
    {
        return $this->getRequest("bill_items/{$id}");
    }
}
