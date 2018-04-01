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
        <div id="heading-row">Change Password</div>

        <form action="process/process_password.php" method="post" id="login-form">

            <div class="row">
                <div class="cell cell-left">Current Password</div>
                <div class="cell cell-right">
                    <input type="password" id="current_password" name="current_password" value="" placeholder="Current Password"  >
                    <span class="field-msg">
                        <?php
                        if (isset($errors['current_password'])) {
                            echo($errors['current_password']);
                        }
                        ?>

                    </span>
                </div>
                <div class="clear-box"></div>
            </div>

            <div class="row">
                <div class="cell cell-left">New Password</div>
                <div class="cell cell-right">
                    <input type="password" id="new_password" name="new_password" value="" placeholder="New Password"  >
                    <span class="field-msg">
                        <?php
                        if (isset($errors['new_password'])) {
                            echo($errors['new_password']);
                        }
                        ?>

                    </span>
                </div>
                <div class="clear-box"></div>
            </div>

            <div class="row">
                <div class="cell cell-left">Re-type Password</div>
                <div class="cell cell-right">
                    <input type="password" id="new_password2" name="new_password2" value="" placeholder="Re Type Password"  >
                    <span class="field-msg">
                        <?php
                        if (isset($errors['new_password2'])) {
                            echo($errors['new_password2']);
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
