<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 5 Part 1</title>
</head>
<body>
<?php
            $horizontal = $_POST["x"];
            $vertical = $_POST["y"];

            $visits = 1;
            if(isset($_COOKIE['visits'])) {
                $visits = $_COOKIE['visits'];
                $visits++;
            }
            setcookie('visits', $visits, time()+3600);

            echo "<br>";

            echo "<p>You have visited: " . $visits . " times.</p>";

            echo "<h1>Multiplication table for " . $horizontal . " by " . $vertical . " table</h1>
                   <br>
                   <br>";
            echo "<table>";
                for ( $i = 1; $i <= $horizontal; $i++) {
                    echo "<tr>";
                    for ($j = 0; $j < $vertical; $j++) {
                        $result = $i + ( $i * $j );
                        echo "<td>". $result ."</td>";
                    }
                    echo "</tr>";
                }
            echo "</table>";
            ?>

</body>
</html>