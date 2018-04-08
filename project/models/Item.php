<?php
require_once 'DBTrait.php';
class Item {
    
    use DBTrait;

    private $itemID;
    private $quantity;

    public function __construct(int $itemID, int $quantity = 1) {
        $this->setItemID($itemID);
        $this->setQuantity($quantity);
    }

    /*
    public function __set($name, $value) {
        $method = "set$name";
        if (!method_exists($this, $method)) {
            throw new Exception("SET Property $name does not exist");
        }
        $this->$method($value);
    }
     * 
     */

    public function __get($name) {
        $method = "get$name";
        if (!method_exists($this, $method)) {
            throw new Exception("GET Property $name does not exist");
        }
        return $this->$method();
    }

    private function setItemID($itemID) {
        $this->itemID = $itemID;
    }

    private function getItemID() {
        return $this->itemID;
    }

    private function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    private function getQuantity() {
        return $this->quantity;
    }


    private function getItem_Name() {
        $obj_db = self::get_obj_db();
        $query = "select name from products "
                . " where id = $this->itemID";
        $result = $obj_db->query($query);
        $data = $result->fetch_object();
        return $data->name;
    }

    private function getUnit_Price() {
        $obj_db = self::get_obj_db();
        $query = "select unit_price from products "
                . " where id = $this->itemID";
        $result = $obj_db->query($query);
        $data = $result->fetch_object();
        return $data->unit_price;        
    }

    private function getTotal_Price() {
        $total = $this->quantity * $this->unit_price;
        return $total;
    }

}

?>