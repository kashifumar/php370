<?php
session_start();
require_once '../../models/User.php';
require_once '../../models/Order.php';
$errors = [];
$obj_user = unserialize($_SESSION['obj_user']);
$obj_cart = unserialize($_SESSION['obj_cart']);
$obj_contact = new User();

try {
    $obj_contact->first_name = $_POST['first_name'];
} catch (Exception $ex) {
    $errors['first_name'] = $ex->getMessage();
}

try {
    $obj_contact->middle_name = $_POST['middle_name'];
} catch (Exception $ex) {
    $errors['middle_name'] = $ex->getMessage();
}
try {
    $obj_contact->last_name = $_POST['last_name'];
} catch (Exception $ex) {
    $errors['last_name'] = $ex->getMessage();
}

try {
    $obj_contact->contact_number = $_POST['contact_number'];
} catch (Exception $ex) {
    $errors['contact_number'] = $ex->getMessage();
}

try {
    $obj_contact->street_address = $_POST['street_address'];
} catch (Exception $ex) {
    $errors['street_address'] = $ex->getMessage();
}

try {
    $obj_contact->country_id = $_POST['country_id'];
} catch (Exception $ex) {
    $errors['country_id'] = $ex->getMessage();
}

try {
    $obj_contact->state_id = $_POST['state_id'];
} catch (Exception $ex) {
    $errors['state_id'] = $ex->getMessage();
}

try {
    $obj_contact->city_id = $_POST['city_id'];
} catch (Exception $ex) {
    $errors['city_id'] = $ex->getMessage();
}

if (!count($errors)) {
    try {
        Order::place_order($obj_user, $obj_contact, $obj_cart);
        $obj_cart->empty_cart();
        $msg = "Order is Placed";
        $_SESSION['msg'] = $msg;
        header("Location:../../msg.php");
    } catch (Exception $ex) {
        $msg = $ex->getMessage();
        $_SESSION['msg'] = $msg;
        header("Location:../checkout.php");
    }
} else {
    $msg = "Check Your Errors";
    $_SESSION['msg'] = $msg;
    $_SESSION['errors'] = $errors;
//    $_SESSION['obj_user'] = serialize($obj_contact);
    header("Location:../checkout.php");
}
?>


