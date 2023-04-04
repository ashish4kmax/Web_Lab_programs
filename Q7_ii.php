<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transpose</title>
</head>

<body>
    <form action="./Q7_ii.php" method="post">
        <table>
            <tr>
                <td>Enter the no. of rows <input type="text"></input></td>

            </tr>
            <tr>
                <td>Enter the no. of columns <input type="text"></input></td>
            </tr>
        </table>
    </form>
</body>

</html> -->

<?php
    $arr = array(array(1,2,3),array(4,5,6),array(7,8,9));
    $m = count($arr);
    $n = count($arr[2]);    
    echo "<h1>Given Matrix : </h1><br><br>";
    for ($i = 0; $i < $m; $i++) {
        for ($j = 0; $j < $n; $j++) {
            echo ($arr[$i][$j]) . " ";
        }
        echo "<br>";
    }
    echo"<br><br><br>";
    echo"<h1>Transpose of Matrix : </h1><br><br>";
    for($i=0; $i<$m ; $i++) {
        for ($j=0; $j < $n; $j++) { 
            echo($arr[$j][$i])." ";
        }
        echo"<br>";
    }
?>