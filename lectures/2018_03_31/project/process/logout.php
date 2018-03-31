<?php

session_start();
require_once '../models/User.php';
//$obj_user = new User();
$obj_user = unserialize($_SESSION['obj_user']);


try {
    $obj_user->logout();
    $msg = "Your Have logged out";
} catch (Exception $ex) {
    $msg = $ex->getMessage();
}
$_SESSION['msg'] = $msg;
header("Location:../msg.php");
?>


