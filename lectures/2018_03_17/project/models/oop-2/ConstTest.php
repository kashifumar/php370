<?php
class ConstTest {
    //constant members
    //always public
    const data = 20;
    public function display(){
        echo(ConstTest::data);
        echo(self::data);
    }
}

$c = new ConstTest();
echo(ConstTest::data);
