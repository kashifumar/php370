<?php
trait DBTrait {
    protected function get_obj_db() {
        $host = "localhost";
        $user = "root";
        $password = "";
        $dbname = "php370";

        $obj_db = new mysqli();
        $obj_db->connect($host, $user, $password);
        if ($obj_db->connect_errno) {
            throw new Exception("DB COnnect Error - $obj_db->connect_error - $obj_db->connect_errno");
        }

        $obj_db->select_db($dbname);

        if ($obj_db->errno) {
            throw new Exception("DB Select Error - $obj_db->error - $obj_db->errno");
        }

        return $obj_db;
    }
}
