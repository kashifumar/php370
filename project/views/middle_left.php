<section id="middle-container">
    <div id="middle-top"></div>
    <div id="middle-middle">
        <div id="middle-left">
            <div id="categories-box">
                <div id="category-heading">Categories</div>
                <div id="categories">
                    <ul>
<?php                        
try {

    $brands = Brand::get_products();
    foreach($brands as $b){
        echo("<li><a href='" . BASE_URL . "products/products.php?brand_id=$b->id'>$b->name</a></li>");        
    }
    
} catch (Exception $ex) {
    echo("<li>" . $ex->getMessage() . "</li>");
}
?>        
                    </ul>
                </div>
                <div id="news-letter-box">
                    <div id="news-letter-heading">Newsletter</div>
                    <form action="#" method="post">
                        <div>
                            <input type="text" id="name" name="name" value="Name" />
                        </div>
                        <div>
                            <input type="text" id="email" name="email" value="Email" />
                        </div>
                        <input type="image" src="<?php echo(BASE_URL);?>images/subscribe.png" id="subscribe" alt="Subscribe" />
                    </form>
                </div>
            </div>
        </div>
