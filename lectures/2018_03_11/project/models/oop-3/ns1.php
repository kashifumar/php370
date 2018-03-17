<?php
require_once 'DB.php';

//$m = new \DB\MYSqlDB();
//$o = new \DB\OracleDB();

use DB\MYSqlDB as msq;
use DB\OracleDB;

//$m = new MYSqlDB();
$m = new msq();
$o = new OracleDB();

$m->display1();
$o->display1();