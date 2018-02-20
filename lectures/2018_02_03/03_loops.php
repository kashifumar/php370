<?php
//var months = new Array();
//months[months.length] = "Jan";
$months = array("Jan");
$months[] = "Feb";

$output = "";

$output .= "<select>";
$output .= "<option>Select</option>";
for($i = 0 ; $i < count($months); $i++){
$output .= "<option value='" . $months[$i] . "'>" . $months[$i] . "</option>";
}
$output .= "</select>";
echo($output);

?>