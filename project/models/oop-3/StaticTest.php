<?php

class StaticTest {

    private static $sdata = 0;
    private $nonSdata = 0;

    public function display() {
//        echo(StaticTest::$data);
        echo("Static - " . self::$sdata . "<br>");
        echo("Non Static - " . $this->nonSdata . "<br><hr>");
    }
    public function change() {
        self::$sdata++;
        $this->nonSdata++;
    }

}

//echo(StaticTest::$data);

$s1 = new StaticTest();
$s2 = new StaticTest();
$s3 = new StaticTest();
$s4 = new StaticTest();
$s5 = new StaticTest();
$s6 = new StaticTest();
$s7 = new StaticTest();
$s8 = new StaticTest();

$s2->change();
$s3->change();
$s4->change();
$s5->change();
$s6->change();
$s7->change();
$s8->change();

$s1->display();
$s1->change();
$s3->change();
$s8->display();
$s8->change();
$s8->display();
$s2->display();














?>