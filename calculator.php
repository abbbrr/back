<?php
$num1=$_POST['num1'];
$num2=$_POST ['num2'];
$operator=$_POST ['operator'];
function calculator($num1, $num2, $operator) {
    switch ($operator) {
        case "+":
            $result = $num1 + $num2;
            
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            $result = $num1 / $num2;
            break;
        default:
            return "Invalid operator";
    }

echo "Result: " . $num1 . " " . $operator . " " . $num2 . " = " . $result;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculator.php" method="post">
    <label>Enter first number:</label>
    <input type="text" name="num1">
    <br>
    <label>Enter second number:</label>
    <input type="text" name="num2">
    <br>
    <label>Select operator:</label>
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <br>
    <input type="submit" value="Calculate">

    </form>
        <?php
        calculator($num1, $num2, $operator);

?>
</body>
</html>
