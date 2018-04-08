<?php
require_once '../models/Cart.php';
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
$brand_id = isset($_GET['brand_id']) ?  $_GET['brand_id'] : 0;
$page_no = isset($_GET['page']) ?  $_GET['page'] : 1;
$type = isset($_GET['type']) ?  $_GET['type'] : "all";

try {
    $products = Product::get_products($page_no, ITEM_PER_PAGE, $type, $brand_id);
    foreach($products as $p){
        echo("\n\n<div class='product'> "
                . "\n <div class='product-image'>"
                . "\n <a href='" . BASE_URL . "products/product_detail.php?product_id=$p->id' target='_blank'>"
                . "\n<img src='" . BASE_URL . "products/catalog/$p->name/$p->image' alt='$p->name' title='Click here to view details' />"
                . "\n</a></div>"
                . "\n <div class='product-title'>$p->name</div>"
                . "\n<div class='view-count'>$p->view_count views</div>"
                . "\n<div class='product-price'>$ $p->unit_price</div>"
                . "\n<div class='spacer11pxH'></div>"
                . "\n<div class='add-to-cart-box'>"
                . "\n<form action='" . BASE_URL . "products/process/process_cart.php' method='post'>"
                . "\n<input type='hidden' name='action' value='add_to_cart' />"
                . "\n<input type='hidden' name='product_id' value='$p->id' />"
                . "\n<input type='submit' value='Add to Cart - ' />"
                . "\n</form> "
                . "\n </div>"
                . "\n </div>");
    }
    
    
    $pageNums = Product::pagination(ITEM_PER_PAGE, $brand_id);
    
    echo("\n\n<div style='clear:both;'><ul style='list-style-type:none;padding:0;margin:0;'>");
    foreach ($pageNums as $pNO => $offset) {
//        echo("<a href='" . BASE_URL  . "products/products.php?offset=$offset'>$pNO</a> - ");
        echo("<li style='float:left;padding:10px;'><a href='" . BASE_URL  . "products/products.php?page=$pNO&type=$type&brand_id=$brand_id'>$pNO</a></li> - ");
    }
    echo("</ul></div>");
} catch (Exception $ex) {
    echo($ex->getMessage());
}
?>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <div class="clear-box"></div>
</div>
<script>
$(document).ready(function(e){
    $("a[href$='page=<?php echo($page_no);?>']").parent("li").addClass("current_page");
    $("a[href$='page=<?php echo($page_no);?>']").addClass("current_page");
});

</script>
<?php
require_once '../views/footer.php';
?>
