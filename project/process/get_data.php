<?php

require_once '../models/Location.php';
$response = [];
//echo("<pre>");
//print_r($_POST);
//echo("</pre>");

if (isset($_POST['country_id'])) {

    $country_id = $_POST['country_id'];
    try {
        $countries = Location::get_states($country_id);
        $response['states'] = $countries;
        $response['success'] = TRUE;
    } catch (Exception $ex) {
        $response['msg'] = $ex->getMessage();        
        $response['error'] = TRUE;
    }
}

else if (isset($_POST['state_id'])) {

    $state_id = $_POST['state_id'];
    try {
        $cities = Location::get_cities($state_id);
        $response['cities'] = $cities;
        $response['success'] = TRUE;
    } catch (Exception $ex) {
        $response['msg'] = $ex->getMessage();        
        $response['error'] = TRUE;
    }
}

//for(;;){}
//foreach ($response as $value) {
//    
//}
//
//foreach ($value as $key => $value) {
//    
//}

$str_response = json_encode($response);
//return $str_response;
echo($str_response);










?>