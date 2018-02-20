<?php
function display(){
	//variables defined inside a function are local varaibles
	//never available in any language outside of the function
	$data = 20;
	echo("inside function Data is $data<br>");
}

display();
	echo("outside function Data is $data<br>");

?>