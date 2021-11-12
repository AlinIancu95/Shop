<?php
include "functions.php";
$vendor = new Vendor($_GET['id']);
$vendor->delete();

header('Location: adminPanel.php');
