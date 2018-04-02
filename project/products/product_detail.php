<?php
require_once '../models/User.php';
require_once '../models/Product.php';
require_once '../models/Brand.php';
require_once '../views/header.php';
//require_once '../views/header_banner.php';
//require_once '../views/slider.php';
require_once '../views/middle_left.php';
?>


<div id="middle-right">
    <div class="spacer20pxH"></div>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<?php
$product_id = isset($_GET['product_id']) ? $_GET['product_id'] : 0;
try {
    
    $obj_product = new Product();
    $obj_product->id = $product_id;
    $obj_product->get_product();
    echo("<pre>");
    print_r($obj_product);
    echo("</pre>");
} catch (Exception $ex) {
    echo($ex->getMessage());
}

?>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <div class="clear-box"></div>
</div>
<?php
require_once '../views/footer.php';
?>
