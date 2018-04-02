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
try {
    $products = Product::get_products();
    foreach($products as $p){
        echo("<div class='product'> "
                . " <div class='product-image'>"
                . " <a href='" . BASE_URL . "products/product_detail.php?product_id=$p->id' target='_blank'>"
                . "<img src='" . BASE_URL . "products/catalog/$p->name/$p->image' alt='$p->name' title='Click here to view details' />"
                . "</a></div>"
                . " <div class='product-title'>$p->name</div>"
                . "<div class='view-count'>$p->view_count views</div>"
                . "<div class='product-price'>$ $p->unit_price</div>"
                . "<div class='spacer11pxH'></div>"
                . "<div class='add-to-cart-box'>"
                . "<form action='#' method='post'>"
                . "<input type='hidden' name='action' value='add_to_cart' />"
                . "<input type='hidden' name='product_id' value='$p->id' />"
                . "<input type='submit' value='Add to Cart - ' />"
                . "</form> "
                . " </div>"
                . " </div>");
    }
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
