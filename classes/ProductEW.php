<?php

class ProductEW extends Product
{
    /** @var Product */
    public $parentProduct;

    public function getFinalPrice()
    {
        return $this->parentProduct->getFinalPrice() * $this->discount/100;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name.'('.$this->parentProduct->name.')';
    }

    public static function getTableName()
    {
        return 'products';
    }


}