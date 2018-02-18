<?php
session_start();
//echo("<pre>");
//print_r($_POST);
//echo("</pre>");

$errors = [];
$user_data = [];

if (empty($_POST['email'])) {
    $errors['email'] = "Missing Email";
} else {
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid Email";
    }
    else{
        $user_data['email'] = $_POST['email'];
    }
}

if (empty($_POST['user_name'])) {
    $errors['user_name'] = "Missing User Name";
}
else{
    $reg = "/^[a-z][a-z0-9]{5,19}$/i";
    if(!preg_match($reg, $_POST['user_name'])){
        $errors['user_name'] = "Invalid User Name";
    }
    else{
        $user_data['user_name'] = $_POST['user_name'];
    }
}

if (empty($_POST['password'])) {
    $errors['password'] = "Missing Password";
}
else{
    $reg = "/^[a-z][a-z0-9]{5,15}$/i";
    if(!preg_match($reg, $_POST['password'])){
        $errors['password'] = "Invalid password";
    }
}



if (!count($errors)) {
    $msg = "Congratulations";
    $_SESSION['msg'] = $msg;
    header("Location:../msg.php");
} else {
    $msg = "Check Your Errors";
    $_SESSION['msg'] = $msg;
    $_SESSION['errors'] = $errors;
    $_SESSION['user_data'] = $user_data;
    header("Location:../signup_2.php");
}
?>


