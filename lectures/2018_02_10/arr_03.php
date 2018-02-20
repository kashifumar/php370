<?php
//$data = array();
$data = array(1, "asif");
$data[] = "Adnan";
$data[] = 100;

$str_data = json_encode($data);
echo($str_data);

$parts = json_decode($str_data);

echo("<pre>");
print_r($parts);
echo("</pre>");

?>