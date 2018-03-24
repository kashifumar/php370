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

    public static function get_states($country_id) {
        $obj_db = self::get_obj_db();

        $query_select = "select * from states "
                . " where country_id = $country_id "
                . " order by state_name asc";

        $result = $obj_db->query($query_select);
        if ($obj_db->errno) {
            throw new Exception("Select States Error - $obj_db->error - $obj_db->errno");
        }

        if ($result->num_rows == 0) {
            throw new Exception("States Not FOund");
        }
        $states = [];
        while($state = $result->fetch_object()){
            $states[] = $state;
        }
        return $states;

    }

    public static function get_cities($state_id) {
        $obj_db = self::get_obj_db();

        $query_select = "select * from cities "
                . " where state_id = $state_id "
                . " order by name asc";

        $result = $obj_db->query($query_select);
        if ($obj_db->errno) {
            throw new Exception("Select cities Error - $obj_db->error - $obj_db->errno");
        }

        if ($result->num_rows == 0) {
            throw new Exception("cities Not FOund");
        }
        $cities = [];
        while($city = $result->fetch_object()){
            $cities[] = $city;
        }
        return $cities;

    }
    
}
