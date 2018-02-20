<?php
function pass_by_value($data){
	echo("Start of function <br>
		Data is $data<br><hr>");
		$data = 100;
	echo("End of function <br>
		Data is $data<br><hr>");
}

function pass_by_reference(&$data){
	echo("Start of function <br>
		Data is $data<br><hr>");
		$data = 200;
	echo("End of function <br>
		Data is $data<br><hr>");
}

$data = 20;

echo("Start<br>
	Data - $data<br><hr>");

//pass_by_value($data);
pass_by_reference($data);

echo("End<br>
	Data - $data<br><hr>");















?>