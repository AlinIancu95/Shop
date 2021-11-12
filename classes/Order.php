<?php

class Order extends Base
{
    public $userId;

    public $cartId;

    public $addressId;

    public $shippingMethod;

    public $paymentMethod;

    public static function getTableName()
    {
        return 'orders';
    }

    /**
     * @return OrderItem[]
     */
    public function getOrderItems()
    {
        return OrderItem::findBy('orderId', $this->getId());
    }
}