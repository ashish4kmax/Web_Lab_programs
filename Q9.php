<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting Table</title>
    <style>
        table,
        td,
        th {
            border: 1px solid blue;
            width: 66%;
            text-align: center;
            border-collapse: collapse;
            background-color: lightgrey;
        }

        table {
            margin: auto;
        }
    </style>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "studata";
    $a = [];
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection falied : " . $conn->connect_error);
    }

    $sql = "SELECT * FROM student";
    $result = $conn->query($sql);
    echo "<center><h2>BEFORE SORTING</h2></center>";
    echo "<table border='2'>";
    echo "<tr><th>USN</th><th>NAME</th><th>ADDRESS</th></tr>";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["Usn"] . "</td>";
            echo "<td>" . $row["Name"] . "</td>";
            echo "<td>" . $row["Address"] . "</td></tr>";
            array_push($a, $row["Usn"]);
        }
    } else
        echo "Table is empty";
    echo "</table>";
    $n = count($a);
    $b = $a;
    for ($i = 0; $i < ($n - 1); $i++) {
        $pos = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($a[$pos] > $a[$j])
                $pos = $j;
        }
        if ($pos != $i) {
            $temp = $a[$i];
            $a[$i] = $a[$pos];
            $a[$pos] = $temp;
        }
    }
    $c = [];
    $d = [];
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            for ($i = 0; $i < $n; $i++) {
                if ($row["Usn"] == $a[$i]) {
                    $c[$i] = $row["Name"];
                    $d[$i] = $row["Address"];
                }
            }
        }
    }
    echo "<br>";
    echo "<center><h2>AFTER SORTING</h2></center>";
    echo "<table border='2'>";
    echo "<tr>";
    echo "<th>USN</th><th>NAME</th><th>ADDRESS</th></tr>";
    for ($i = 0; $i < $n; $i++) {
        echo "<tr>";
        echo "<td>" . $a[$i] . "</td>";
        echo "<td>" . $c[$i] . "</td>";
        echo "<td>" . $d[$i] . "</td></tr>";
    }
    echo "</table>";
    $conn->close();
    ?>
    </head>

    </html>
