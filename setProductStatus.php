<?php
include "functions.php";

foreach (Product::findAll() as $product){
    if (count($product->getImages())>0){
        $product->status = Product::STATUS_ACTIVE;
    } else {
        $product->status = Product::STATUS_INACTIVE;
    }
    $product->save();
}