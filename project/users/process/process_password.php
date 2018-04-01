<?php
session_start();
require_once '../../models/User.php';
$errors = [];
$obj_user = unserialize($_SESSION['obj_user']);


try {
    $obj_user->password = $_POST['current_password'];
} catch (Exception $ex) {
    $errors['current_password'] = $ex->getMessage();
}

try {
    User::validate_password($_POST['new_password']);
} catch (Exception $ex) {
    $errors['new_password'] = $ex->getMessage();    
}


try {
    User::comapre_passwords($_POST['new_password'], $_POST['new_password2']);
} catch (Exception $ex) {
    $errors['new_password2'] = $ex->getMessage();    
}

if (!count($errors)) {
    try {
        $obj_user->update_password($new_password);
        $msg = "Congratulations";
        $_SESSION['msg'] = $msg;
        header("Location:../my_account.php");
    } catch (Exception $ex) {
        $msg = $ex->getMessage();
        $_SESSION['msg'] = $msg;
        header("Location:../change_password.php");
    }
} else {
    $msg = "Check Your Errors";
    $_SESSION['msg'] = $msg;
    $_SESSION['errors'] = $errors;
//    $_SESSION['obj_user'] = serialize($obj_user);
    header("Location:../change_password.php");
}
?>


