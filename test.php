<?php
include "functions.php";
// Totalul TV SAMSUNG vandute.
    $totalSamsung = 0;
    foreach (Order::findAll() as $order){
        foreach ($order->getOrderItems() as $orderItem){
            if ($orderItem->getProduct()->getCategory()->getName()=='TV' && $orderItem->getProduct()->getVendor()->getName()=='Samsung' ){
                $totalSamsung=$totalSamsung + $orderItem->price * $orderItem->quantity;
            }
        }
    }
echo $totalSamsung.'<br/>';



//Totalul vanzarilor pe Samsung
foreach (Vendor::findAll() as $vendor){
    $totalSaleSamsung = 0;
    foreach (Order::findAll() as $order){
        foreach ($order->getOrderItems() as $orderItem){
            if ($orderItem->getProduct()->getVendor()->getName()==$vendor->name ){
                $totalSaleSamsung=$totalSaleSamsung + $orderItem->price * $orderItem->quantity;
            }

        }
    }
    echo 'Totalul vanzarilor'.$vendor->name.' este:'.$totalSaleSamsung.'<br/>';
}


//Totalul vanzarilor pe Apple
$totalSales = [];
foreach (Order::findAll() as $order){
    foreach ($order->getOrderItems() as $orderItem){
        if(!isset($totalSales[$orderItem->getProduct()->getVendor()->getName()])){
            $totalSales[$orderItem->getProduct()->getVendor()->getName()]= 0;
        }
        $totalSales[$orderItem->getProduct()->getVendor()->getName()] =  $totalSales[$orderItem->getProduct()->getVendor()->getName()] + $orderItem->price * $orderItem->quantity;
    }
}
var_dump($totalSales); die;
