<?php
$data = "This abc is a sample php code. php stands for php. php is a server side scripting language";

$reg = "/ /";
//$reg = "/\b[a-z]{3}\b/";

//preg_match
//preg_match_all
//preg_replace
//preg_replace
//$result = preg_split($reg, $data);
//$result = preg_split($reg, $data,2);
//$result = preg_split($reg, $data,2,PREG_SPLIT_OFFSET_CAPTURE);
$result = preg_split($reg, $data,-1,PREG_SPLIT_OFFSET_CAPTURE);
echo("<pre>");
print_r($result);
echo("</pre>");


















?>