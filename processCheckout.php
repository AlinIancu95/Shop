<?php
include "functions.php";
$data=$_POST;
$cart = getCurrentCart();

$address = new Address();
$address->fromArray($data['address']);
$order = new Order();
$order->fromArray($data['order']);


if (getAuthUser()){
    $address->userId = getAuthUser()->getId();
    $order->userId = getAuthUser()->getId();
}

if($order->addressId=='') {
    $address->save();
    $order->addressId = $address->getId();
}
$order->cartId=$cart->getId();

$order->save();

foreach ($cart->getCartItems() as $cartItem){
    $orderItem = new OrderItem();
    $orderItem->productId = $cartItem->productId;
    $orderItem->orderId = $order->getId();
    $orderItem->quantity = $cartItem->quantity;
    $orderItem->price = $cartItem->getProduct()->getFinalPrice();
    $orderItem->save();
}
unset($_SESSION['cartId']);
header('Location: index.php');