<?php
$num1 = 20;
$num2 = 10;
$result = $num1 + $num2;

//echo($result);
/*echo($result);
*/
#echo($result);
//$output = $num1 + " add " + $num2 + " = " + $result ;
/*
if a string is used in a numeric operation (+, -, *, /)
PHP Implicitly (automatically) type-cast(converts) it into a number
if it was a numeric string, the type-casting is ok
if it was an alpha-numeric string, it is converted to 0
*/

$output = $num1 . " + " . $num2 . " = " . $result ;
echo($output);










?>