<?php

session_start();
require_once '../../models/Item.php';
require_once '../../models/Cart.php';

if (isset($_SESSION['obj_cart'])) {
    $obj_cart = unserialize($_SESSION['obj_cart']);
} else {
    $obj_cart = new Cart();
}

if (isset($_POST['action'])) {
    
    switch ($_POST['action']) {
        case "add_to_cart":

            $quantity = isset($_POST['quantity']) ? $_POST['quantity'] : 1;
//            $item = new Item("aaa", "ddd");
            $item = new Item($_POST['product_id'], $quantity);
//            $item->itemID = $_POST['product_id'];
//            $item->quantity = 1;
            
//            $item->itemID = 2222;
//            $item->quantity = 2221;
            
            $obj_cart->add_to_cart($item);

            break;
        
        case "update_cart":
            $qtys = isset($_POST['qtys']) ? $_POST['qtys'] : [];
            $obj_cart->udpate_cart($qtys);
            break;
    }
}

else if (isset($_GET['action'])) {
    
    switch ($_GET['action']) {
        case "remove_item":

            $item = new Item($_GET['product_id']);
            $obj_cart->remove_item($item);

            break;
        case "empty_cart":

            $obj_cart->empty_cart();

            break;
    }
}

$_SESSION['obj_cart'] = serialize($obj_cart);



header("Location:" . $_SERVER['HTTP_REFERER']);
?>