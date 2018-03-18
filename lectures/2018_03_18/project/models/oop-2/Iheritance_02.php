<?php

class ParentA {

    public function display(){
        echo("Display of parent called<br>");
    }
}

class ChildA extends ParentA {


}

$p = new ParentA();
$c = new ChildA();

$p->display();
$c->display();












?>
