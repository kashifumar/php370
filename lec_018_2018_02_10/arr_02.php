<?php
//$data = array();
$data = array(1, "asif");
$data[] = "Adnan";
$data[] = 100;

$str_data = serialize($data);
echo($str_data);

$parts = unserialize($str_data);

echo("<pre>");
print_r($parts);
echo("</pre>");

?>