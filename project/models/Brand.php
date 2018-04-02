<?php

require_once 'DBTrait.php';

class Brand {

    use DBTrait;

    private $id;
    private $name;
    private $image;

    public function __construct() {
        $this->id = 0;
    }

    public function __set($name, $value) {
        $method = "set$name";
        if (!method_exists($this, $method)) {
            throw new Exception("SET Property $name does not exist");
        }
        $this->$method($value);
    }

    private function setId($id) {
        $this->id = $id;
    }

    private function getId() {
        return $this->id;
    }

    private function setName($name) {
        $this->name = $name;
    }

    private function getName() {
        return $this->name;
    }

    private function setImage($image) {
        $this->image = $image;
    }

    private function getImage() {
        return $this->image;
    }

    public static function get_products() {
        $query = "select * "
                . " from brands ";
        $ob_db = self::get_obj_db();
        $result = $ob_db->query($query);
        if ($ob_db->errno) {
            throw new Exception("*Select Brands Error - $ob_db->errno - $ob_db->error");
        }
        if (!$result->num_rows) {
            throw new Exception("*Brands Not Found");
        }

        $brands = [];
        while ($b = $result->fetch_object()) {
            $brands[] = $b;
        }

        return $brands;
    }

}
