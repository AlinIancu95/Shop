<?php

class Category extends Base
{
    public $name;

    public $productCount;


    public function getProducts()
    {
        return Product::findBy('categoryId', $this->getId());
    }

    public static function getTableName()
    {
        return 'categories';
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


}