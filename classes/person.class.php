<?php
 declare(strict_types=1);
// ini_set('display_errors', 1);

class Person
{
    private $name;
    private $eyeColor;
    private $age;

    public static $drinkingAge = 30;

    // Self is used for static properties;
    // :: means that we are accessing a static property;
    // public static function setDrinkingAge($newDA)
    // {
    //     self::$drinkingAge = $newDA;
    // }
    // This is used to instatiate the data of the class, if we reference a  new class we will be able to pass data in it;
    // public function __construct($name, $eyeColor, $age)
    // {
    //     $this->name = $name;
    //     $this->eyeColor = $eyeColor;
    //     $this->age = $age;
    // }

    // Methods
    public function setName(string $newName)
    {
        $this->name = $newName;
    }

    public function getName()
    {
        // This is used to reference to this class and the property name of the class Person;
        return $this->name;
        // return $this->name;
        // return $this->eyeColor;

    }

    public function getAge()
    {
        // This is used to reference to this class and the property name of the class Person;
        return $this->name;
        // return $this->name;
        // return $this->eyeColor;

    }
    public function getEyeColor()
    {
        // This is used to reference to this class and the property name of the class Person;
        return $this->eyeColor;
        // return $this->name;
        // return $this->eyeColor;

    }

    // public function getDa()
    // {
    //     // This is used to reference to this class and the property name of the class Person;
    //     return self::$drinkingAge;
    // }
}
