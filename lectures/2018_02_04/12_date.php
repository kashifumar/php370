<?php
//date
//getdate
//mktime
//time
//date_default_timezone_set("Asia/Karachi");
date_default_timezone_set("Asia/Tokyo");
$date = getdate();
$ts = time();

echo("TS - $ts<pre>");
print_r($date);
echo("</pre>");

?>











