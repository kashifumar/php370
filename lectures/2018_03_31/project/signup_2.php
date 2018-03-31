<?php
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
        if (isset($_SESSION['user_data'])) {
            $user_data = $_SESSION['user_data'];
        }
        ?>
        <div id="heading-row">Sign Up</div>

        <form action="process/process_signup_2.php" method="post" id="signup-form">

            <div class="row">
                <div class="cell cell-left">Email</div>
                <div class="cell cell-right">
                    <input type="text" id="email" name="email" value="<?php
                    if (isset($user_data['email'])) {
                        echo($user_data['email']);
                    }
                    ?>" placeholder="Email"  >            
                    <span class="field-msg">
                        <?php
                        if (isset($errors['email'])) {
                            echo($errors['email']);
                        }
                        ?>
                    </span>
                </div>
                <div class="clear-box"></div>
            </div>

            <div class="row">
                <div class="cell cell-left">User Name</div>
                <div class="cell cell-right">
                    <input type="text" id="user_name" name="user_name" value="<?php
                    if (isset($user_data['user_name'])) {
                        echo($user_data['user_name']);
                    }
                    ?>" placeholder="User Name"  >
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
                    <div class="cell cell-right"><a href="#">Login</a></div>
                </div>
                <div class="cell cell-right">
                    <input type="submit" value="Register" >
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
