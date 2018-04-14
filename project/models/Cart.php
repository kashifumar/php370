<?php

require_once 'Item.php';

class Cart {

    private $items;

    public function __construct() {
        $this->items = [];
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

    private function getItems(): array {
        return $this->items;
    }

    private function getCount(): int {

        $total = 0 ;
        foreach($this->items as $item){
            $total += $item->quantity;
        }
        return $total;
    }

    private function getTotal_Price(): float {
        $total = 0.0 ;
        foreach($this->items as $item){
            $total += $item->total_price;
        }
        return $total;
    }

    public function add_to_cart(Item $item) {
//        echo("<pre>");
//        print_r($item);
//        echo("</pre>");
//        die;
        if (array_key_exists($item->itemID, $this->items)) {
            $this->items[$item->itemID]->quantity +=$item->quantity;
        } else {
            $this->items[$item->itemID] = $item;
        }
    }

    public function remove_item(Item $item) {
        if (array_key_exists($item->itemID, $this->items)) {
            unset($this->items[$item->itemID]);
        }         
    }

    public function udpate_cart(array $qtys) {
//        echo("<pre>");
//        print_r($this->items);
//        echo("</pre>");
//        echo("<pre>");
//        print_r($qtys);
//        echo("</pre>");

        foreach($this->items as $item){
            if(is_numeric($qtys[$item->itemID])){
                
                if($qtys[$item->itemID] > 0){
                    $this->items[$item->itemID]->quantity = $qtys[$item->itemID];
                }
                else if($qtys[$item->itemID] == 0){
                    
                    $this->remove_item($item);
                }
            }
        }
        
//        echo("<pre>");
//        print_r($this->items);
//        echo("</pre>");
//        
//        die;
    }

    public function empty_cart() {
        $this->items = [];
    }

}

?>