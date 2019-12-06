<?php

 declare(strict_types=1);
include_once './includes/autoLoader.inc.php';
// include_once "./includes/calc.inc.php"

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
    <title>Calculator</title>
</head>

<body>
    <div class="container">
        <div>
            <h4 class="titleStyle">Calculator</h1>
        </div>

        <div class="formCalculate">
            <form action='./includes/calc.inc.php' method="post" class="form-example">
                <div class="input">
                    <input type="number" name="num1" placeholder="First number">
                </div>
                <div class="option">
                    <select name="oper">
                        <option value="add">Addition</option>
                        <option value="sub">Substraction</option>
                        <option value="div">Division</option>
                        <option value="mul">Multiplication</option>
                    </select>
                </div>
                <div class="input">
                    <input type="number" name="num2" placeholder="Second number">
                </div>
                <div class="buttonStyle">
                    <button type="submit" name="submit">Calculate</button>

                </div>

            </form>

        </div>
    </div>
</body>

</html>