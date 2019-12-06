<?php

 //declare(strict_types=1);
  ini_set('display_errors', 1);
include_once './autoLoader.inc.php';
//  include_once './includes/autoLoader.inc.php';

$chosenOperator = $_POST["oper"];
$number1 = $_POST["num1"];
$number2 = $_POST["num2"];


 $calc = new Calc($chosenOperator, (int)$number1, (int)$number2);

try {
    echo"Hey";
    echo"\n";
    echo $_POST["oper"];
    echo"\n";
    echo $_POST["num1"];
    echo"\n";
    echo $_POST["num2"];
    echo"\n";
    echo $calc->calculator();
} catch (TypeError $e) {
    echo "Error!:" . $e->getMessage();
}

?>