<?php

/**
 * Basic class, object, property and method intro
 */

//How to define class
class Calculation
{
    public $a, $b;

    public function sum()
    {
        return $this->a + $this->b;
    }

    public function sub()
    {
        return $this->a - $this->b;
    }
}

// variables to assigned value
$a = 50;
$b = 20;

// Create an object for Calculation class
$objOne = new Calculation();
// Assign values in class Properties using Object example
$objOne->a = $a;
$objOne->b = $b;
// Call method from Calculation class using Object
echo 'Sum of ' . $a . ' And ' . $b . ' is ' . $objOne->sum();

echo "<br>";

// Create another object for Calculation class
$objTwo = new Calculation();
// Assign values in class properties using Object example
$objTwo->a = $a;
$objTwo->b = $b;
// Call method from Calculation class using Object
echo 'Sub of ' . $a . ' And ' . $b . ' is ' . $objTwo->sub();
