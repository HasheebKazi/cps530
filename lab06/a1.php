<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 5: Part 1</title>

    <style>

	h1 { color: #111; font-family: 'Helvetica Neue', sans-serif; font-size: 80px; font-weight: bold; letter-spacing: -1px; line-height: 1; text-align: center; }


        h2 { color: #111; font-family: 'Helvetica Neue', sans-serif; font-size: 60px; font-weight: 300; line-height: 32px; margin: 0 0 72px; text-align: center; }


        p { color: #685206; font-family: 'Helvetica Neue', sans-serif; font-size: 14px; line-height: 24px; margin: 0 0 24px; text-align: justify; text-justify: inter-word; }




	table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #4CAF50;
  color: white;
}				

        div.gallery {
            margin: 1%;
            border: 1px solid #ccc;
            float: left;
            width: 31%;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }

    </style>

</head>
<body>
    <h1>Ontario Scenery</h1>
    <p>Images Sourced From: <a href="https://www.slice.ca/travel/photos/most-beautiful-places-in-ontario/#!Killarney-Provincial-Park-Ontario">here.</a></p>
    <?php
        $servername = "localhost"; $username = "h2kazi"; $password = "HypolfOy";

        $connection = mysqli_connect($servername, $username, $password, "h2kazi");

        if (!$connection) {
                die("connecion failed: ". mysqli_connect_error());
        }

        $sql_select_01 = "SELECT * FROM photos ORDER BY date ASC";
        $result = mysqli_query($connection, $sql_select_01);

        if ($result->num_rows > 0) {
            // output data of each row
            echo "<table>";
            echo "<tr>
                <th>Subject</th>
                <th>Location</th>
                <th>Date</th>
            </tr>";



            while($row = $result->fetch_assoc()) {
                echo "<tr>";

                    echo "<td>";
                    echo $row["subject"];
                    echo "</td>";

                    echo "<td>";
                    echo $row["location"];
                    echo "</td>";

                    echo "<td>";
                    echo $row["date"];
                    echo "</td>";

                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
	}

	echo "<br>";
        echo "<br>";

	$inlineH2 = "";
        echo "<h2 style=$inlineH2 >Image Gallery</h2>";

        $sql_select_02 = "SELECT * FROM photos ORDER BY date ASC";
        $result2 = mysqli_query($connection, $sql_select_02);

        if ($result2->num_rows > 0) {
            // output data of each row
            while($row = $result2->fetch_assoc()) {
                $imgUrl = $row["url"];
		$ga = "gallery"; $w="800"; $g="800"; $s = $row["subject"]; $desc="desc"; 

		$rr = $row["location"];
		
		echo "<div class=$ga>";
                echo    "<img src=$imgUrl width=$w height=$g>";
		echo    "<div class=$desc>Subject: $s</div>";
		echo    "<div class=$desc>Location: $rr</div>";

                echo "</div>";


            }

        } else {
            echo "0 results";
        }






    ?>
</body>
</html>
