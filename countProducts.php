<?php
include "functions.php";
foreach (Category::findAll() as $category){
    $category->productCount = count($category->getProducts());
    echo "{$category->name} updated. \n";
    $category->save();
}
