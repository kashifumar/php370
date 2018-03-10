<?php

class ParentA {

    /**
     * Directly Accessible outside of the class
     * INherit in Child Class
     */
    private $private_data;  //both no
    public $public_data;    //both yes
    protected $protected_data; //only inherit

}

class ChildA extends ParentA {

    public function test() {
        
    }

}

$p = new ParentA();
$c = new ChildA();
?>
