<?php
//$data = array();
$data = array(1, "asif");
$data[] = "Adnan";
$data[] = 100;

//echo($data);
$str_data = implode(",", $data);
echo($str_data);

$parts = explode(",", $str_data);

echo("<pre>");
print_r($parts);
echo("</pre>");

?>