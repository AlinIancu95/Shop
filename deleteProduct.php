<?php
include "functions.php";
$product = new Product($_GET['id']);
$product->delete();
header('Location: index.php');
