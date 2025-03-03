<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="calculator.php" method="post">
        First Num: <input type="number" step="0.001" name="num1">
        <br>
        <br>
        OP: <input type="text" name="op">
        <br>
        <br>
        Second Num: <input type="number" step="0.001" name="num2">
        <br>
        <br> 
        <input type="submit">
    </form>

    <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op  = $_POST["op"];

    if($op == "+"){
        echo $num1 + $num2 ;
    }
    elseif( $op == "-"){
        echo $num1 - $num2 ;
    }
    elseif( $op == "/"){
        echo $num1 / $num2 ;
    }
    elseif( $op == "*"){
        echo $num2 * $num1;
    }
    else{
       echo 'invalid operator';
    }
    ?>
</body>
</html>