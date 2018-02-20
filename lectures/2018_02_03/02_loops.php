<?php


$output = "";

$output .= "<select>";
$output .= "<option>Select</option>";
for($i = 1 ; $i <= 10; $i++){
$output .= "<option value='" . $i . "'>" . $i . "</option>";
}
$output .= "</select>";
echo($output);

?>