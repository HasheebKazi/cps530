<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CPS530 Lab 5</title>
</head>
<body>
    <title>CPS530 Lab 5</title>
    <?php
        $x = $_POST['x'];
        $y = $_POST['Y'];

        if ($x < 3 || $x > 12) {
            echo "X is in valid"
        }
        if ($y < 3 || $y > 12) {
            echo "Y is in valid"
        }
    ?>
</body>
</html>