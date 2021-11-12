<?php
include "functions.php";
$cartItem = new CartItem($_GET['id']);
$cartItem->delete();

header('Location: cart.php');
