<?php
require_once 'DBTrait.php';
abstract class Location {
    use DBTrait;
    
    public static function get_countries() {
        $obj_db = self::get_obj_db();

        $query_select = "select * from countries "
                . " order by name asc";

        $result = $obj_db->query($query_select);
        if ($obj_db->errno) {
            throw new Exception("Select Countries Error - $obj_db->error - $obj_db->errno");
        }

        if ($result->num_rows == 0) {
            throw new Exception("COuntries Not FOund");
        }
        $countries = [];
        while($country = $result->fetch_object()){
            $countries[] = $country;
        }
        return $countries;

    }
    
}
