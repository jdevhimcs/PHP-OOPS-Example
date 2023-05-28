<?php

/**
 * Construction function introduction
 */

//How to define class
class Person
{
    // Set Properties
    public $name, $age;

    // Set default value 
    public function __construct($name = "No name", $age = 0)
    {
        $this->name = $name;
        $this->age = $age;
    } 

    // method that will show properties
    public function show()
    {
        echo "Person name is " .$this->name ." and age is " . $this->age;
    }
}


// Create an object for Calculation class
$objOne = new Person('Gaurav Pandey', '27');

// Call method from Calculation class using Object
$objOne->show();
