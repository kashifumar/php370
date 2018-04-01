<?php
require_once '../models/User.php';
require_once '../views/header.php';
//require_once './views/header_banner.php';
//require_once './views/slider.php';
require_once '../views/middle_left.php';
?>


<div id="middle-right">
    <div class="spacer20pxH"></div>
    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->

    <div id="form-container">
        <?php
        if (isset($_SESSION['msg'])) {
            $msg = $_SESSION['msg'];
            echo($msg);
        }
        if (isset($_SESSION['errors'])) {
            $errors = $_SESSION['errors'];
            unset($_SESSION['errors']);
        }
        ?>
        <div id="heading-row">Change Image</div>

        <form action="process/process_profile_image.php" method="post" id="login-form" enctype="multipart/form-data">

            <div class="row">
                <div class="cell cell-left">
                    <img src="<?php echo($obj_user->profile_image);?>">
                    
                </div>
                <div class="cell cell-right">
                    <input type="file" id="pimg" name="pimg">
                    <span class="field-msg">
                        <?php
                        if (isset($errors['pimg'])) {
                            echo($errors['pimg']);
                        }
                        ?>

                    </span>
                </div>
                <div class="clear-box"></div>
            </div>
            
            <div class="row">
                    <input type="submit" value="Update" >
                <div class="clear-box"></div>
            </div>

        </form>

    </div>

    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <div class="clear-box"></div>
</div>
<?php
require_once '../views/footer.php';
?>
