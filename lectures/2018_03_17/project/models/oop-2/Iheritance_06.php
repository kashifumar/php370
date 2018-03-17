<?php

abstract class ParentA {

    public abstract function display();
}

class ChildA extends ParentA {
    public function display() {
        /**
         * to do later
         */
    }

}

//$p = new ParentA();
$c = new ChildA();

$c->display();












?>
