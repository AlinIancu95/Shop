<?php
include "functions.php";
$data=$_POST;

$newVendor = new Vendor();
$newVendor->name = $_POST['name'];
$newVendor->save();

header('Location: adminPanel.php');


