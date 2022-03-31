<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Form</title>
</head>
<body>
    <form action="Temperature.php" method="POST">
        <input type="text" name="TemperatureVal" placeholder="Temperature ..."><br>
        <input type="text" name="DecimalPlaces" placeholder="Decimal Places ..."><br>
        Celsius<input type="radio" name="TemperatureType" value = "celsius">
        Fahrenheit<input type="radio" name="TemperatureType" value = "fahrenheit">
        <input type="submit" name="submit">
    </form>
</body>
</html>