<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
include 'autoload.php';

//REQUEST 1=====================================================================

$ajax1Request = filter_input(INPUT_POST, "ajax1");
if (isset($ajax1Request)) {

    $typeOfVehicle = strtolower(filter_input(INPUT_POST, "typeOfVehicle"));
    $inputedWeight = +(filter_input(INPUT_POST, "weight"));

    $divStart = "<div id='$typeOfVehicle'>";

    $vehicle = ""
        . "<input type='text' id='characteristic'  value='4500x1800x1600'> Enter vehicle dimensions<br>"
        . "<input type='text' id='weightEmpty'  value='$inputedWeight'> Enter vehicle empty weight<br>"
        . "<input type='text' id='weightFull' value='$inputedWeight'> Enter vehicle full weight<br>"
        . "<input type='text' id='engineVol' value='2'> Enter engine volume<br>"
        . "<input type='text' id='fuelType' value='petrol'> Enter fuel type<br>"
        . "";

    $car = ""
        . "<input type='text' id='typeTransmission'  value='manual'> Enter type of transmission<br>"
        . "<input type='text' id='numPassenger' value='1'> Enter number of passengers<br>"
        . "<input type='text' id='bodyType' value='sedan'> Enter body type<br>"
        . "";

    $truck = ""
        . "<input type='text' id='allowedWeightTrailer' value='0'> Enter allowed weight of trailer<br>"
        . "<input type='text' id='numAxle' value='0'> Enter number of axles<br>"
        . "";
    $divEnd = "</div>";

    $vehicleCategoryCar = ""
        . "<select id='vehicleCategory'>"
        . "<option value='Compact'>Compact</option>"
        . "<option value='Business'>Business</option>"
        . "<option value='suv'>SUV</option>"
        . "</select>";

    $vehicleCategoryTruck = ""
        . "<select id='vehicleCategory'>"
        . "<option value='Light'>Light</option>"
        . "<option value='Heavy'>Heavy</option>"
        . "</select>";


    $button = "<input type='button' id='countRoadTax' value='Count road tax'>";

    switch ($typeOfVehicle) {
        case ('car'): $outPut = $divStart . $vehicle . $car . $vehicleCategoryCar . $button . $divEnd;
            break;
        case ('truck'): $outPut = $divStart . $vehicle . $truck . $vehicleCategoryTruck . $button . $divEnd;
            break;
        default: $outPut = "Weight is out of catagory";
    }
    echo $outPut;
}

//REQUEST 2=====================================================================
try {
    $ajax2Request = filter_input(INPUT_POST, "ajax2");
    if (isset($ajax2Request)) {
        $vehicleCategory = filter_input(INPUT_POST, "vehicleCategory");
        $vehicle = new $vehicleCategory($_POST);
        $vehicle->showInfo();
    }
} catch (Exception $e) {
    echo "SOORRRRYYY";
}