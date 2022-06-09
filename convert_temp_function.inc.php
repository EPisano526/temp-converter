<?php
$convertedTemp = "";
$originalUnit = "--Select--";
$conversionUnit = "--Select--";
// function to calculate converted temperature
function convertTemp($temp, $unit1, $unit2)
{
    // Celsius to Fahrenheit = T(°C) × 9/5 + 32
    if (($unit1 == "celsius") && ($unit2 == "fahrenheit")) {
        $convertedTemp = $temp * 9 / 5 + 32;
    }
    // Celsius to Kelvin = T(°C) + 273.15
    if (($unit1 == "celsius") && ($unit2 == "kelvin")) {
        $convertedTemp = $temp + 273.15;
    }
    // Fahrenheit to Celsius = (T(°F) - 32) × 5/9
    if (($unit1 == "fahrenheit") && ($unit2 == "celsius")) {
        $convertedTemp = ($temp - 32) * 5 / 9;
    }
    // Fahrenheit to Kelvin = (T(°F) + 459.67)× 5/9
    if (($unit1 == "fahrenheit") && ($unit2 == "kelvin")) {
        $convertedTemp = ($temp + 459.67) * 5 / 9;
    }
    // Kelvin to Fahrenheit = T(K) × 9/5 - 459.67
    if (($unit1 == "kelvin") && ($unit2 == "fahrenheit")) {
        $convertedTemp = $temp * 5 / 9 - 459.67;
    }
    // Kelvin to Celsius = T(K) - 273.15
    if (($unit1 == "kelvin") && ($unit2 == "celsius")) {
        $convertedTemp = $temp - 273.15;
    }
    return $convertedTemp;
} // end function