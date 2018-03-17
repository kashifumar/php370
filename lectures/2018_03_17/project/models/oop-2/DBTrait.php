<?php

trait DBTrait {

    private $private_data;
    public $public_data;
    protected $protected_data;

}

class Test{
    use DBTrait;
    
    public function display() {
        
    }
}
