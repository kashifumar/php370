<?php
function display() //siganture
{
	//block/body/implementation
}

display();


function sum(int $num1, int $num2) 
{
	echo($num1 + $num2);
}

//sum(201, 10);
//sum("ss", 10);

function sum2(int $num1, int $num2) : int
{
	$result = $num1 + $num2;
	$output = $num1 . " + " . $num2 . " = " . $result;
	return $output;
	//return $result;
}

$result = sum2(10, 20);
echo($result);








?>