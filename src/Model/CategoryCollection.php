<?php namespace NetovD\cml\Model;

use NetovD\cml\ORM\Collection;

class CategoryCollection extends Collection
{
    /**
     * Attach products to categories.
     *
     * @param ProductCollection $productCollection
     * @return void
     */
    public function attachProductCollection($productCollection)
    {
        foreach ($this->fetch() as $category) {
            $category->attachProducts($productCollection);
        }
    }
}
