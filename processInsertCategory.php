<?php
include "functions.php";
$data=$_POST;

$newVendor = new Category();
$newVendor->name = $_POST['name'];
$newVendor->save();

header('Location: adminPanel.php');


