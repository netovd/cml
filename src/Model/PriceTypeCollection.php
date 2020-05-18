<?php namespace NetovD\cml\Model;

use NetovD\cml\ORM\Collection;

class PriceTypeCollection extends Collection
{
    /**
     * Get price type by id.
     *
     * @param $type
     * @return string
     */
    public function getType($type)
    {
        return $this->get($type)->type;
    }
}
