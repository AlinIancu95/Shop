<?php

include "functions.php";
$cartItem = new CartItem($_GET['id']);
$cartItem->quantity = $_POST['quantity'];
$cartItem->save();

header('Location: cart.php');
