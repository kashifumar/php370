<?php
//date
//getdate
//mktime
//time
//date_default_timezone_set("Asia/Karachi");
date_default_timezone_set("Asia/Tokyo");
$ts = mktime(0, 0, 0, 8, 14, 1947);

$date1 = getdate($ts);
$date2 = date("l, dS F, Y - h:i:s a", $ts);

echo("TS - $ts<br>
Date2 - $date2<pre>");
print_r($date1);
echo("</pre>");

?>











