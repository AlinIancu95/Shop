<?php
include "functions.php";

if (count(User::findBy('username', $_POST['username'])) > 0 || count(User::findBy('email', $_POST["email"])) > 0){
    header('Location: newUser.php');
} else {
    $newUser = new User();
    $newUser->fromArray($_POST);
    $newUser->password = md5($_POST['password']);
    $newUser->role = 'user';
    $newUser->save();

    header('Location: index.php');
}




