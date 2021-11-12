<?php
include "functions.php";
$data=$_POST;

$files = $_FILES;

copy($files['image']['tmp_name'],'/var/www/html/national02/alin/Shop/Shop/images/'.$files['image']['name']);

$product = new Product();
$product->fromArray($_POST);
//$product->name = $_POST['name'];
//$product->price = $_POST['price'];
//$product->description = $_POST['description'];
//$product->code = $_POST['code'];
//$product->discount = $_POST['discount'];
//$product->weight = $_POST['weight'];
//$product->type = $_POST['type'];
//$product->categoryId = $_POST['categoryId'];
//$product->vendorId = $_POST['vendorId'];
$product->save();

$image = new Image();
$image->file= $files['image']['name'];
$image->productId= $product->getId();
$image->save();


header('Location: index.php');