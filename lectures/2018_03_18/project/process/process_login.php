<?php

session_start();
require_once '../models/User.php';
$errors = [];
//create an object of class User
//instantiate an object of class User
$obj_user = new User();

try {
    $obj_user->user_name = $_POST['user_name'];
} catch (Exception $ex) {
    $errors['user_name'] = $ex->getMessage();
}

try {
    $obj_user->password = $_POST['password'];
} catch (Exception $ex) {
    $errors['password'] = $ex->getMessage();
}

if (!count($errors)) {
    try {
        $rememebr = isset($_POST['remember']) ? TRUE : FALSE;
        $obj_user->login_user($rememebr);
        header("Location:../index.php");
    } catch (Exception $ex) {
        $msg = $ex->getMessage();
        header("Location:../login.php");
    }
    $_SESSION['msg'] = $msg;
    
} else {
    $msg = "Check Your Errors";
    $_SESSION['msg'] = $msg;
    $_SESSION['errors'] = $errors;
    $_SESSION['obj_user'] = serialize($obj_user);
    header("Location:../login.php");
}
?>


