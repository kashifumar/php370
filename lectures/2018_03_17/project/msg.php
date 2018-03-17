<?php
require_once './models/User.php';
require_once './views/header.php';
//require_once './views/header_banner.php';
require_once './views/slider.php';
require_once './views/middle_left.php';
?>


<div id="middle-right">
    <div class="spacer20pxH"></div>
    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <h1>
        <?php
        if (isset($_SESSION['msg'])) {

            $msg = $_SESSION['msg'];
            echo($msg);
            unset($_SESSION['msg']);
        }
        ?>    

    </h1>
    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <div class="clear-box"></div>
</div>
<?php
require_once './views/footer.php';
?>
