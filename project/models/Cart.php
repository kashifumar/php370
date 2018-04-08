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
    
    private function getItems() : array {
        return $this->items;
    }
    
    private function getCount() : int{
        
        return 0;
    }

    private function getTotal_Price() : float{
        return 0.0;
    }

    public function add_to_cart(Item $item){
        $this->items[] = $item; 
    }
    
    public function remove_item(Item $item){
        
    }
    
    public function udpate_cart(){
        
    }
    
    public function empty_cart(){
        
    }
    
    
    
    

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}

?>