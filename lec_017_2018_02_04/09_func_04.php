<?php
//global scope
	//variables defined outside a function are global varaibles
	//generally available in mostly language inside of the function
	//but in php they are not availble implicitly
	//explicitly we make them available in a fucntion by using global keyword

	$data = 20;

function display(){
	//local scope
	global $data;
	echo("inside function Data is $data<br>");
}

display();
	echo("outside function Data is $data<br>");

?>