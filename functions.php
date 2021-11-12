<?php
session_start();

include "classes/Base.php";
include "classes/Product.php";
include "classes/ProductEW.php";
include "classes/ProductDelivery.php";
include "classes/Category.php";
include "classes/Vendor.php";
include "classes/Image.php";
include "classes/Cart.php";
include "classes/CartItem.php";
include "classes/User.php";
include "classes/Address.php";
include "classes/Review.php";
include "classes/Order.php";
include "classes/OrderItem.php";


$mysql = mysqli_connect('localhost','root','Sco@l@it123','national-02-alin-shop');

function query($sql)
{
    global $mysql;
    $query = mysqli_query($mysql,$sql);
    if ($query===true){
        return true;
    }
    if ($query===false){
        die('Error on:'.$sql);
    }

    return mysqli_fetch_all($query, MYSQLI_ASSOC);
}



function getAuthUser(){
    if (isset($_SESSION['userId'])){
        $user =  new User($_SESSION['userId']);
        return $user;
    } else {
        return false;
    }
}

function getAuthAdmin(){
    $admin = getAuthUser()->role == 'admin';
    return $admin;
}

function formatPrice($price){
    $intPart = intval($price);

    $floatPart = intval(($price-$intPart)*100);

    return "$intPart<sup>$floatPart</sup>";
}

function getCurrentCart(){
    if (isset($_SESSION['cartId'])){
        return new Cart($_SESSION['cartId']);
    } else {
        $cart = new Cart();
        $cart->userId=0;
        $cart->save();
        $_SESSION['cartId'] = $cart->getId();
        return $cart;
    }
}

$salt = 'dsakjashdkjkjisdf3244@#$@#$dssdf';
