<?php
include "functions.php";
$category = new Category($_GET['id']);
$category->delete();

header('Location: adminPanel.php');
