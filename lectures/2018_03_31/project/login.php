<?php
require_once './models/User.php';
require_once './views/header.php';
//require_once './views/header_banner.php';
//require_once './views/slider.php';
require_once './views/middle_left.php';
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
        <div id="heading-row">Login</div>

        <form action="process/process_login.php" method="post" id="login-form">

            <div class="row">
                <div class="cell cell-left">User Name</div>
                <div class="cell cell-right">
                    <input type="text" id="user_name" name="user_name" value="<?php echo($obj_user->user_name);?>" placeholder="User Name"  >
                    <span class="field-msg">
                        <?php
                        if (isset($errors['user_name'])) {
                            echo($errors['user_name']);
                        }
                        ?>

                    </span>
                </div>
                <div class="clear-box"></div>
            </div>

            <div class="row">
                <div class="cell cell-left">Password</div>
                <div class="cell cell-right">
                    <input type="password" id="password" name="password" value="" placeholder="Password"  >
                    <span class="field-msg">
                        <?php
                        if (isset($errors['password'])) {
                            echo($errors['password']);
                        }
                        ?>

                    </span>
                </div>
                <div class="clear-box"></div>
            </div>

            <div class="row">
                <div class="cell cell-left">
                    <div class="cell cell-right">
                        <input type="checkbox" id="remember" name="remember" value="remember"> Remember Me
                    </div>
                </div>
                <div class="cell cell-right">
                    <input type="submit" value="Login" >
                </div>
                <div class="clear-box"></div>
            </div>

        </form>

    </div>

    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <div class="clear-box"></div>
</div>
<?php
require_once './views/footer.php';
?>
