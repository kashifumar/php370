<?php

session_start();
require_once '../../models/User.php';
$errors = [];
$obj_user = unserialize($_SESSION['obj_user']);


try {
//    $obj_user->first_name = $_POST['first_name'];
    $obj_user->Profile_Image = $_FILES['pimg'];
    
    $msg = "Congratulations";
    $_SESSION['msg'] = $msg;
    header("Location:../my_account.php");
} catch (Exception $ex) {
    $msg = $ex->getMessage();
    $_SESSION['msg'] = $msg;
    header("Location:../change_profile_image.php");
}
?>


