<?php

class OrderItem extends Base
{
    public $productId;

    public $orderId;

    public $quantity;

    public $price;

    public static function getTableName()
    {
        return 'order_items';
    }


    public function getOrder(){
        return Order::find($this->orderId);
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return Product::find($this->productId);
    }
}