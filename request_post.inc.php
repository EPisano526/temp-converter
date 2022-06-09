<?php

    // Logic to check for POST and grab data from $_POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Store the original temp and units in variables
        // You can then use these variables to help you make the form sticky
        // then call the convertTemp() function
        // Once you have the converted temperature you can place PHP within the converttemp field using PHP
        // I coded the sticky code for the originaltemp field for you
        $error_bucket = [];
        $originalTemperature = ($_POST['originaltemp']);
        $originalUnit = ($_POST['originalunit']);
        $conversionUnit = $_POST['conversionunit'];
        //errors to catch
        //if original temp is empty
        if ($_POST['originaltemp'] == "") {
            array_push($error_bucket, "Please enter a numerical temperature you would like to get converted.");
        }
        //if original temp has characters
        if (!is_numeric($_POST['originaltemp'])) {
            array_push($error_bucket, "Please make sure you enter a number.");
        }
        //if original unit is set to the same as conversion unit
        if ($originalUnit == $conversionUnit) {
            array_push($error_bucket, "Please choose a different conversion unit");
        }
        //if no original unit is selected
        if ($originalUnit == "--Select--") {
            array_push($error_bucket, "Please choose an original temperature unit");
        }
        //if no conversion unit is selected
        if ($conversionUnit == "--Select--") {
            array_push($error_bucket, "Please choose an conversion temperature unit");
        }
        //error bucket in unordered list
        if (count($error_bucket) > 0) {
            echo "<h2>Please follow the following specifications:</h2>";
            echo "<ul>";
            for ($i = 0; $i < count($error_bucket); $i++) {
                echo "<li>" . $error_bucket[$i] . "</li>";
            }
            echo "</ul>";
        } else {
            // $error_bucket = [];
            $convertedTemp = convertTemp($originalTemperature, $originalUnit, $conversionUnit);
        }
    } // end if
