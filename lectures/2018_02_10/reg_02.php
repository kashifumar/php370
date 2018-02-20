<?php
$data = "This abc is a sample php code. php stands for php. php is a server side scripting language";

$reg = "/php/";
//$reg = "/\b[a-z]{3}\b/";
$rep = ":)";

//preg_match
//preg_match_all
//$result = preg_replace($reg, $rep, $data);
$result = preg_replace($reg, $rep, $data,2);
//preg_split
echo($result);










?>