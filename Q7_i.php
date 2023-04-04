<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPLE CALC</title>
</head>

<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Enter num1 : <input type="text" name="n1" value=""></td>
            </tr>
            <tr>
                <td>Enter num2 : <input type="text" name="n2" value=""></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="sub" value="+">
                    <input type="submit" name="sub" value="-">
                    <input type="submit" name="sub" value="/">
                    <input type="submit" name="sub" value="x">
                </td>
            </tr>
        </table>
    </form>

    <?php 
    if(isset($_POST['sub'])) {
        $num1 = $_POST['n1'];
        $num2 = $_POST['n2'];
        $op = $_POST['sub'];
        if($op == "+") {
            echo "Result : ".$num1+$num2;
        }
        else if ($op == "-") {
            echo "Result : " . $num1 - $num2;
        }
        else if ($op == "x") {
            echo "Result : " . $num1 * $num2;
        }
        else if ($op == "/") {
            if($num2==0) {
                echo "Undefined!!";
            }
            else {
                echo "Result : " . $num1 / $num2;
            }
        }
    }
    ?>
</body>

</html>