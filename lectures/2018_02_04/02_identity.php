<?php
/*
$data1 = "abc";
$data2 = 10;
*/
/*
$data1 = "abc";
$data2 = "abc";
*/

/*
$data1 = "abc";
$data2 = 0;
*/

$data1 = "10";
$data2 = 10;

/*
if a string is compared with a number
PHP Implicitly (automatically) type-cast(converts) it into a number
if it was a numeric string, the type-casting is ok
if it was an alpha-numeric string, it is converted to 0
*/

//if($data1 == $data2)
if($data1 === $data2)
{
	echo("$data1 and $data2 are same");
}
else{
	echo("$data1 and $data2 are different");
}










?>