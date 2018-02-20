<?php
$dataI = array(1, "asif", "Lahore", 100);
$dataA = array("sr_no"=>1, "name"=>"asif", 
"city"=> "Lahore", "weight"=> 100);

for($i = 0 ; $i < count($dataI); $i++){
	echo("$dataI[$i] <br>");
}
echo("<br><hr>");
for($i = 0 ; $i < count($dataA); $i++){
	echo("$dataA[$i] <br>");
}











?>