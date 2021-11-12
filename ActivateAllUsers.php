<?php
include "functions.php";
foreach (User::findAll() as $user){
    $user->status=User::STATUS_ACTIVE;
    echo "{$user->email} updated.\n";
    $user->save();
}