<?php
$data = "";

$reg = "/php/";

$result = preg_match($reg, $data,$matches,PREG_OFFSET_CAPTURE);
echo($result);
echo("<pre>");
print_r($matches);
echo("</pre>");










?>