<?php
//  declare(strict_types=1);

// ini_set('display_errors', 1);

class Calc
{
    public $num1;
    public $num2;
    public $operater;
    // public $greeting;

    // public function helloUser($DefineGreeting)
    // {
    //     $this->greeting = $DefineGreeting;
    // }

    public function __construct(string $chosenOperator, int $number1, int $number2)
    {
        $this->operater = $chosenOperator;
        $this->num1 = $number1;
        $this->num2 = $number2;
    }

    public function calculator()
    {
        switch ($this->operater) {
            case 'add':
                $result = $this->num1 + $this->num2;
                return $result;
                break;

            case 'sub':
                $result = $this->num1 - $this->num2;
                return $result;
                break;

            case 'div':
                $result = $this->num1 / $this->num2;
                return $result;
                break;

            case 'mul':
                $result = $this->num1 * $this->num2;
                return $result;
                break;

            default:
                echo "errorr sorry";
                break;
        }
    }
}
