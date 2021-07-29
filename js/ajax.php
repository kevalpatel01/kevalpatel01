<?php
//include "config.php";
include_once "function.php";
if (isset($_POST['getStateByCountry']) == "getStateByCountry") {
    $countryId = $_POST['countryId'];
    $common = new Common();
    $states = $common->getStateByCountry($connection, $countryId);
    $stateData = '<option value="">States</option>';
    if ($states->num_rows > 0) {
        while ($state = $states->fetch_object()) {
            $stateData .= '<option value="' . $state->id . '">' . $state->statename . '</option>';
        }
    }
    echo "test^" . $stateData;
}
if (isset($_POST['getCityByState']) == "getCityByState") {
    $statesId = $_POST['stateId'];
    $common = new Common();
    $cities = $common->getCityByState($connection, $statesId);
    $cityData = '<option value="">City</option>';
    if ($cities->num_rows > 0) {
        while ($city = $cities->fetch_object()) {
            $cityData .= '<option value="' . $city->id . '">' . $city->cityName . '</option>';
        }
    }
    echo "test^" . $cityData;
}
