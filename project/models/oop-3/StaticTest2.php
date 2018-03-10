<?php

class StaticTest2 {

    private static $sdata = 0;
    private $nonSdata = 0;

    public function non_static_func(){
        //can call both static and non static
    }

    public static function static_func(){
        //can only call static 
        //cannot use $this in static methods
    }

}
//StaticTest2::static_func();

$s1 = new StaticTest2();
$s2 = new StaticTest2();

$s1->non_static_func();
$s2->non_static_func();


$s1->static_func();
$s2->static_func();




?>