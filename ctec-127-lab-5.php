<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Lab No. 5 - Temp. Converter</title>
</head>

<body>
    <?php require "convert_temp_function.inc.php" ?>
    <?php require "request_post.inc.php" ?>

    <!-- Form starts here -->
    <h1>Temperature Converter</h1>
    <h4>CTEC 127 - PHP with SQL 1</h4>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <div class="group">
            <label for="temp">Temperature</label>
            <!-- You could have also used a Ternary on the line below -->
            <input type="text" value="<?php if (isset($_POST['originaltemp'])) {
                                            echo $_POST['originaltemp'];
                                        }
                                        ?>" name="originaltemp" size="14" maxlength="7" id="temp">

            <select name="originalunit">
                <option value="--Select--">--Select--</option>
                <option value="celsius" <?= ($originalUnit == "celsius") ? 'selected="selected"' : ""; ?>>Celsius</option>
                <option value="fahrenheit" <?= ($originalUnit == "fahrenheit") ? 'selected="selected"' : ""; ?>>Fahrenheit</option>
                <option value="kelvin" <?= ($originalUnit == "kelvin") ? 'selected="selected"' : ""; ?>>Kelvin</option>
            </select>
        </div>

        <div class="group">
            <label for="convertedtemp">Converted Temperature</label>
            <input type="text" value="<?= $convertedTemp ?>" name="convertedtemp" size="14" maxlength="7" id="convertedtemp" readonly>

            <select name="conversionunit">
                <option value="--Select--">--Select--</option>
                <option value="celsius" <?= ($conversionUnit == "celsius") ? 'selected="selected"' : ""; ?>>Celsius</option>
                <option value="fahrenheit" <?= ($conversionUnit == "fahrenheit") ? 'selected="selected"' : ""; ?>>Fahrenheit</option>
                <option value="kelvin" <?= ($conversionUnit == "kelvin") ? 'selected="selected"' : ""; ?>>Kelvin</option>
            </select>
        </div>
        <input type="submit" value="Convert" />
    </form>
</body>

</html>