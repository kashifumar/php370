<?php

require_once 'DBTrait.php';
require_once 'User.php';
require_once 'Cart.php';

class Order {

    use DBTrait;

    public static function place_order($obj_user, $obj_contact, $obj_cart) {

        $obj_db = self::get_obj_db();
        //with user_id = $obj_user->id;
        $query_address_insert = "insert into address";
        $result = $obj_db->query($query_address_insert);

        $address_id = $obj_db->insert_id;


        //with $obj_user->id and $address_id
        // order_date = now()
        $now = date("Y-m-d H:i:s");
        $query_order_insert = "insert into orders ";
        $result = $obj_db->query($query_order_insert);

        $order_id = $obj_db->insert_id;

        foreach ($obj_cart->items as $item) {
            //with $order_id
            $query_items_insert = "insert into order_items ";
            $result = $obj_db->query($query_items_insert);
        }
    }

}
