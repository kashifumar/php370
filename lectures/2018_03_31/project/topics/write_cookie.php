<?php
$expire = time()+(60*60*24*15);
setcookie("php370a");
setcookie("php370b", "abc");
setcookie("php370c", "abc", $expire);
setcookie("php370d", "abc", $expire, "/");
setcookie("php370e", "abc", $expire, "/evs/php370/project/products/");

//setcookie("php370f", "abc", $expire, "/", "www.evs.com");
//setcookie("php370g", "abc", $expire, "/", "evs.com");
//setcookie("php370h", "abc", $expire, "/", "evs.com", TRUE);

?>