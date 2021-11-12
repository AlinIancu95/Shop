<?php

class Vendor extends Base
{
    public $name;

    public function getProducts()
    {
        return Product::findBy('vendorId', $this->getId());
    }

    public static function getTableName()
    {
        return 'vendors';
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }



}