<?php
require_once '../models/Cart.php';
require_once '../models/User.php';
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
if($obj_cart->items){
    echo("<table border='2' bordercolor='red' width='100%' cellpadding='0' cellspacing='0'>");
    echo("<thead>"
            . "<tr>"
            . "<th>X</th>"
            . "<th>Product Name</th>"
            . "<th>View Details</th>"
            . "<th>Unit Price</th>"
            . "<th>Quantity</th>"
            . "<th>Total</th>"
            . "</tr></thead>");
    
    foreach($obj_cart->items as $item){
    echo("<tbody><tr>"
            . "<td>X</td>"
            . "<td>$item->item_name</td>"
            . "<td><a href='" . BASE_URL . "products/product_detail.php?product_id=$item->itemID' target='_blank'>View Details</a></td>"
            . "<td>$item->Unit_Price</td>"
            . "<td>$item->Quantity</td>"
            . "<td>$item->Total_Price</td>"
            . "</tr></tbody>");
        
    }
    echo("<tfoot>"
            . "<tr>"
            . "<th>Shop More</th>"
            . "<th>EMpty Cart</th>"
            . "<th>Update Cart</th>"
            . "<th>Check Out</th>"
            . "<th>TOTAL</th>"
            . "<th>$obj_cart->total_price</th>"
            . "</tr></tfoot>");
    echo("</table>");
}

else{
    echo("<h1>Your Cart is empty</h1>");
}

?>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <div class="clear-box"></div>
</div>
<?php
require_once '../views/footer.php';
?>
