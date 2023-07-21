<?php

declare(strict_types = 1);
include 'includes/autoloader.inc.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="includes/clac.inc.php" method="post">
        <h3>Calculator Using PHP OOP</h3>
        <input type="number" name="num1" placeholder="First Number">
        <select name="oper" id="">
            <option value="add">Addition</option>
            <option value="sub">Subtraction</option>
            <option value="mul">Multiplication</option>
            <option value="div">Division</option>
        </select>
        <input type="number" name="num2" placeholder="Second Number">
        <button type="submit">Calculate</button>
    </form>
</body>
</html>