<?php

echo("<pre>");
print_r($_FILES);
echo("</pre>");

$my_files = [];
$j = 0;
for($i = 0 ; $i < count($_FILES['pfi']['name']); $i++){
    
    $my_files[$j]['name'] = $_FILES['pfi']['name'][$i];
    $my_files[$j]['type'] = $_FILES['pfi']['type'][$i];
    $my_files[$j]['tmp_name'] = $_FILES['pfi']['tmp_name'][$i];
    $my_files[$j]['error'] = $_FILES['pfi']['error'][$i];
    $my_files[$j]['size'] = $_FILES['pfi']['size'][$i];
    $j++;
}
echo("<pre>");
print_r($my_files);
echo("</pre>");

?>