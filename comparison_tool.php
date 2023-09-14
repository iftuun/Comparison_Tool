<!DOCTYPE html>
<html>
<head>
    <title>Comparison Tool</title>
</head>
<body>
    <h2>Comparison Tool</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];

        $larger_number = ($number1 > $number2) ? $number1 : $number2;

        echo "<p>The larger number is: $larger_number</p>";
    }
    ?>
</body>
</html>
