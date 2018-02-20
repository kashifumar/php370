<?php
//value types - stack
//reference types - heap

$data1 = 20;
//$data2 = $data1;
$data2 = &$data1;

echo("Data1 : $data1<br>
Data2 : $data2<br><hr>");

$data1 = 100;
echo("After Changing Data1<br>Data1 : $data1<br>
Data2 : $data2<br><hr>");

$data2 = 200;
echo("After Changing Data2
<br>Data1 : $data1<br>
Data2 : $data2<br><hr>");

?>