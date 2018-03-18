<?php
require_once '../models/User.php';
require_once '../models/Location.php';
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

    <div id="heading-row">Edit Account</div>

    <form action="<?php echo(BASE_URL);?>users/process/process_account.php" method="post" enctype="multipart/form-data" id="signup-form">

    <div class="row">
        <div class="cell cell-left">First Name</div>
        <div class="cell cell-right">
            <input type="text" id="firstName" name="firstName" value="<?php echo($obj_user->first_name);?>" placeholder="First Name"  >
            <span class="field-msg"></span>
        </div>
        <div class="clear-box"></div>
    </div>

    <div class="row">
        <div class="cell cell-left">Middle Name</div>
        <div class="cell cell-right">
            <input type="text" id="middleName" name="middleName" value="<?php echo($obj_user->middle_name);?>" placeholder="Middle Name" >
            <span class="field-msg"></span>
        </div>
        <div class="clear-box"></div>
    </div>

    <div class="row">
        <div class="cell cell-left">Last Name</div>
        <div class="cell cell-right">
            <input type="text" id="lastName" name="lastName" value="<?php echo($obj_user->last_name);?>" placeholder="Last Name"  >
            <span class="field-msg"></span>
        </div>
        <div class="clear-box"></div>
    </div>

    <div class="row">
        <div class="cell cell-left">Contact Number</div>
        <div class="cell cell-right">
            <input type="text" id="contactNumber" name="contactNumber" value="<?php echo($obj_user->contact_number);?>" maxlength="16"   placeholder="Contact Number">
            <span class="field-msg"></span>
        </div>
        <div class="clear-box"></div>
    </div>

    <div class="row">
        <div class="cell cell-left">Gender : </div>
        <div class="cell cell-right">
            Male <input type="radio" id="Male" name="gender" value="Male"> - 
            Female <input type="radio" id="Female" name="gender" value="Female">
            <span class="field-msg"></span>
        </div>
        <div class="clear-box"></div>	
    </div>

    <div class="row">
        <div class="cell cell-left">Date Of Birth</div>
        <div class="cell cell-right">
            <input type="text" id="dateOfBirth" name="dateOfBirth" value="<?php echo($obj_user->date_of_birth);?>" placeholder="dd-mm-YYYY">
            <span class="field-msg"></span>
        </div>
        <div class="clear-box"></div>
    </div>

    <div class="row">
        <div class="cell cell-left">Street Address</div>
        <div class="cell cell-right">
            <textarea id="streetAddress" name="streetAddress" class="street_address"   placeholder="Street Address"><?php echo($obj_user->street_address);?></textarea>
            <span class="field-msg"></span>
        </div>
        <div class="clear-box"></div>
    </div>

    <div class="row">
        <div class="cell cell-left">Country</div>
        <div class="cell cell-right">
            <?php
//            $l1 = new Location();
//            $l2 = new Location();
//            $countries = $l1->get_countries();
//            $countries2 = $l2->get_countries();
            $countries = Location::get_countries();
            ?>
            <select id="country_id" name="country_id">
                <option value="">--Select Country--</option>
                <?php
                foreach($countries as $c){
                    echo("<option value='$c->id'>$c->name</option>");
                }
                ?>
            </select>
            <span class="field-msg"></span>
        </div>
        <div class="clear-box"></div>
    </div>

    <div class="row">
        <div class="cell cell-left">State</div>
        <div class="cell cell-right">
            <select id="state_id" name="state_id">
                <option value="">--Select State--</option>
            </select>
            <span class="field-msg"></span>
        </div>
        <div class="clear-box"></div>
    </div>

    <div class="row">
        <div class="cell cell-left">City</div>
        <div class="cell cell-right">
            <select id="city_id" name="city_id">
                <option value="">--Select City--</option>
            </select>
            <span class="field-msg"></span>
        </div>
        <div class="clear-box"></div>	
    </div>

    <div class="row">
        <div class="cell cell-left">
            <div class="cell cell-right"><a href="<?php echo(BASE_URL);?>users/my_account.php">Back</a></div>
        </div>
        <div class="cell cell-right">
            <input type="submit" value="Update" >
        </div>
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
