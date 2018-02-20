<?php
//associative/referenced array
//key=>value
//$data = array();
$data = array("sr_no"=>1, "name"=>"asif");
$data["city"] = "Lahore";
$data["weight"] = 100;

echo("<pre>");
print_r($data);
echo("</pre>");

//echo("Name " . $data["name"]);
//echo("Name " . $data['name']);
echo("Name $data[name]");




?>