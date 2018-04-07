<?php

require_once 'DBTrait.php';
require_once 'Brand.php';

class Product {

    //put your code here
    use DBTrait;

    private $id;
    private $name;
    private $description;
    private $features;
    private $unit_price;
    private $quantity;
    private $view_count;
    private $image;
    private $featured;
    private $brand;
    private $category_id;

    public function __construct() {
        $this->id = 0;
        $this->brand = new Brand();
    }

    public function __set($name, $value) {
        $method = "set$name";
        if (!method_exists($this, $method)) {
            throw new Exception("SET Property $name does not exist");
        }
        $this->$method($value);
    }

    public function __get($name) {
        $method = "get$name";
        if (!method_exists($this, $method)) {
            throw new Exception("GET Property $name does not exist");
        }
        return $this->$method();
    }

    private function getId() {
        return $this->id;
    }

    private function getName() {
        return $this->name;
    }

    private function getDescription() {
        return $this->description;
    }

    private function getFeatures() {
        return $this->features;
    }

    private function getUnit_price() {
        return $this->unit_price;
    }

    private function getQuantity() {
        return $this->quantity;
    }

    private function getView_count() {
        return $this->view_count;
    }

    private function getImage() {
        return $this->image;
    }

    private function getFeatured() {
        return $this->featured;
    }

    private function getBrand() {
        return $this->brand;
    }

    private function getCategory_id() {
        return $this->category_id;
    }

    private function setId($id) {
        $this->id = $id;
    }

    private function setName($name) {
        $this->name = $name;
    }

    private function setDescription($description) {
        $this->description = $description;
    }

    private function setFeatures($features) {
        $this->features = $features;
    }

    private function setUnit_price($unit_price) {
        $this->unit_price = $unit_price;
    }

    private function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    private function setView_count($view_count) {
        $this->view_count = $view_count;
    }

    private function setImage($image) {
        $this->image = $image;
    }

    private function setFeatured($featured) {
        $this->featured = $featured;
    }

    private function setBrand($brand) {
        $this->brand = $brand;
    }

    private function setCategory_id($category_id) {
        $this->category_id = $category_id;
    }

    public static function get_products($page_no = 1, $limit = 6, $type = "all", $brand_id = 0) {

        $offset = self::caluclate_offset($page_no, $limit);

        $query = "select prod.id, prod.name, prod.description, prod.features, "
                . " prod.unit_price, prod.quantity, prod.view_count, prod.image, "
                . " prod.featured, prod.brand_id, prod.category_id, "
                . " brands.name brand_name, brands.image brand_image "
                . " from products prod "
                . " left join brands on prod.brand_id = brands.id ";

        if ($brand_id > 0) {
            $query .= " where prod.brand_id = $brand_id";
        }

        $types = ['all', 'top', 'new'];

        if (!in_array($type, $types)) {
            $type = "all";
        }

        switch ($type) {
            case "top":

                $query .= " order by view_count desc ";
                break;
            case "new":

                $query .= " order by id desc ";
                break;
        }



        $query .= " limit $limit offset $offset";
        $ob_db = self::get_obj_db();
        $result = $ob_db->query($query);
        if ($ob_db->errno) {
            throw new Exception("*Select Products Error - $ob_db->errno - $ob_db->error");
        }
        if (!$result->num_rows) {
            throw new Exception("*Products Not Found");
        }

        $products = [];
        while ($p = $result->fetch_object()) {
            $temp = new Product();
            $temp->id = $p->id;
            $temp->name = $p->name;
            $temp->description = $p->description;
            $temp->features = $p->features;
            $temp->unit_price = $p->unit_price;
            $temp->quantity = $p->quantity;
            $temp->view_count = $p->view_count;
            $temp->image = $p->image;
            $temp->featured = $p->featured;
            $temp->brand->id = $p->brand_id;
            $temp->brand->name = $p->brand_name;
            $temp->brand->image = $p->brand_image;
            $temp->category_id = $p->category_id;
            $products[] = $temp;
        }
        return $products;
    }

    public function get_product() {
        $ob_db = self::get_obj_db();

        $query_update = "update products set "
                . " view_count = view_count + 1 "
                . " where id = $this->id";
        $result_update = $ob_db->query($query_update);

        $query = "select prod.id, prod.name, prod.description, prod.features, "
                . " prod.unit_price, prod.quantity, prod.view_count, prod.image, "
                . " prod.featured, prod.brand_id, prod.category_id, "
                . " brands.name brand_name, brands.image brand_image "
                . " from products prod "
                . " left join brands on prod.brand_id = brands.id "
                . " where prod.id = $this->id";

        $result = $ob_db->query($query);
        if ($ob_db->errno) {
            throw new Exception("*Select Product Error - $ob_db->errno - $ob_db->error");
        }
        if (!$result->num_rows) {
            throw new Exception("*Product Not Found");
        }

        $p = $result->fetch_object();
        $this->id = $p->id;
        $this->name = $p->name;
        $this->description = $p->description;
        $this->features = unserialize($p->features);
        $this->unit_price = $p->unit_price;
        $this->quantity = $p->quantity;
        $this->view_count = $p->view_count;
        $this->image = $p->image;
        $this->featured = $p->featured;
        $this->brand->id = $p->brand_id;
        $this->brand->name = $p->brand_name;
        $this->brand->image = $p->brand_image;
        $this->category_id = $p->category_id;
    }

    public static function pagination($item_per_page = 6, $brand_id = 0) {
        $obj_db = self::get_obj_db();
        $query = "select count(*) 'count' from products";

        if ($brand_id > 0) {
            $query .= " where brand_id = $brand_id";
        }

//        $query = "select name from products ";
//        $query = "select products.name from products ";
//        $query = "select p.name from products p";
        //alias
//        $query = "select id product_id, name product_name, unit_price as Price from products";
        $result = $obj_db->query($query);

        if (!$result->num_rows) {
            throw new Exception("*Product(s) not found");
        }

        $data = $result->fetch_object();
//        echo("\n" . $data->name);
//        echo("\n" . $data->product_name);
//        echo("\n" . $data->count(*));
//        echo("<pre>");
//        print_r($data);
//        echo("</pre>");
//        die;

        $total_items = $data->count;

        $total_pages = ceil($total_items / $item_per_page);

        $pNUms = [];

        for ($i = 1, $j = 0; $i <= $total_pages; $i++, $j += $item_per_page) {
            $pNUms[$i] = $j;
        }

//        echo("<pre>");
//        print_r($pNUms);
//        echo("</pre>");
//        
//        die;
        return $pNUms;
    }

    public static function caluclate_offset($page_no, $item_per_page) {

        $offset = ($page_no - 1) * $item_per_page;
        return $offset;
        /*
          $pNums = self::pagination($item_per_page);

          if (isset($pNums[$page_no])) {
          $offset = $pNums[$page_no];
          return $offset;
          }
          return 0;
         * 
         */
    }

}
