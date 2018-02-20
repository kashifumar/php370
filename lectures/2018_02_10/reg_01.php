<?php
$data = "This abc is a sample php code. php stands for php. php is a server side scripting language";

$reg = "/php/";
//$reg = "/\b[a-z]{3}\b/";

//$result = preg_match($reg, $data);
//$matches = array();
//$result = preg_match($reg, $data,$matches);
//$result = preg_match($reg, $data,$matches,PREG_OFFSET_CAPTURE);
//$result = preg_match($reg, $data,$matches,PREG_OFFSET_CAPTURE,22);
//$result = preg_match_all($reg, $data, $matches);
//$result = preg_match_all($reg, $data, $matches, PREG_OFFSET_CAPTURE);
$result = preg_match_all($reg, $data, $matches, PREG_OFFSET_CAPTURE, 22);
//preg_replace
//preg_split
echo($result);
echo("<pre>");
print_r($matches);
echo("</pre>");










?>