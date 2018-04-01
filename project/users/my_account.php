<?php
require_once '../models/User.php';
require_once '../views/header.php';
//require_once '../views/header_banner.php';
//require_once '../views/slider.php';
require_once '../views/middle_left.php';
?>


<div id="middle-right">
    <div class="spacer20pxH"></div>
<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<?php
//$obj_user = new User();
//$obj_user->id = 1;

$obj_user->profile();

?>

<div id="form-container">

    <div id="heading-row">My Account</div>

    <div class="row">
        <div class="cell cell-left"><a href='<?php echo(BASE_URL);?>users/change_profile_image.php'>Change Image</a></div>
        <div class="cell cell-right">
            <img src='<?php echo($obj_user->profile_image);?>'>
            <span class="field-msg"></span>
        </div>
        <div class="clear-box"></div>
    </div>

    <div class="row">
        <div class="cell cell-left"><a href='<?php echo(BASE_URL);?>users/edit_account.php'>Change Profile</a></div>
        <div class="cell cell-right">
            <a href='<?php echo(BASE_URL);?>users/change_password.php'>Change Password</a>
            <span class="field-msg"></span>
        </div>
        <div class="clear-box"></div>
    </div>
    
    <div class="row">
        <div class="cell cell-left">First Name</div>
        <div class="cell cell-right">
            <?php echo($obj_user->first_name);?>
            <span class="field-msg"></span>
        </div>
        <div class="clear-box"></div>
    </div>

    <div class="row">
        <div class="cell cell-left">Middle Name</div>
        <div class="cell cell-right">
            <?php echo($obj_user->middle_name);?>
            <span class="field-msg"></span>
        </div>
        <div class="clear-box"></div>
    </div>

    <div class="row">
        <div class="cell cell-left">Last Name</div>
        <div class="cell cell-right">
            <?php echo($obj_user->last_name);?>
            <span class="field-msg"></span>
        </div>
        <div class="clear-box"></div>
    </div>

    <div class="row">
        <div class="cell cell-left">Email</div>
        <div class="cell cell-right">
            <?php echo($obj_user->email);?>
            <span class="field-msg"></span>
        </div>
        <div class="clear-box"></div>
    </div>

    <div class="row">
        <div class="cell cell-left">User Name</div>
        <div class="cell cell-right">
            <?php echo($obj_user->user_name);?>
            <span class="field-msg"></span>
        </div>
        <div class="clear-box"></div>
    </div>

    <div class="row">
        <div class="cell cell-left">Contact Number</div>
        <div class="cell cell-right">
            <?php echo($obj_user->contact_number);?>
            <span class="field-msg"></span>
        </div>
        <div class="clear-box"></div>
    </div>

    <div class="row">
        <div class="cell cell-left">Gender : </div>
        <div class="cell cell-right">
            <?php echo($obj_user->gender);?>
            <span class="field-msg"></span>
        </div>
        <div class="clear-box"></div>	
    </div>

    <div class="row">
        <div class="cell cell-left">Date Of Birth</div>
        <div class="cell cell-right">
            <?php echo($obj_user->date_of_birth);?>
            <span class="field-msg"></span>
        </div>
        <div class="clear-box"></div>
    </div>

    <div class="row">
        <div class="cell cell-left">Street Address</div>
        <div class="cell cell-right">
            <?php echo($obj_user->street_address);?>
            <span class="field-msg"></span>
        </div>
        <div class="clear-box"></div>
    </div>


    <div class="row">
        <div class="cell cell-left">City</div>
        <div class="cell cell-right">
            <?php echo($obj_user->city);?>
            <span class="field-msg"></span>
        </div>
        <div class="clear-box"></div>	
    </div>

    <div class="row">
        <div class="cell cell-left">State</div>
        <div class="cell cell-right">
            <?php echo($obj_user->state);?>
            <span class="field-msg"></span>
        </div>
        <div class="clear-box"></div>
    </div>

    <div class="row">
        <div class="cell cell-left">Country</div>
        <div class="cell cell-right">
            <?php echo($obj_user->country);?>

            <span class="field-msg"></span>
        </div>
        <div class="clear-box"></div>
    </div>

</div>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <div class="clear-box"></div>
</div>
<?php
require_once '../views/footer.php';
?>
