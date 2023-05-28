<?php

/**
 * Inheritance introduction
 */

//How to define class
class Employee
{
    // Set Properties
    public $name, $age, $salary;

    // Set default value 
    public function __construct($n = "No name", $a = 0, $s = 0)
    {        
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    } 

    // method that will show properties
    public function show()
    {
        echo '<h1>Employee Profile</h1>';
        echo 'Name is '. $this->name ." and age is " . $this->age . ' and Salary ' . $this->salary;
    }
}


// Create an object for Employee class
$objOne = new Employee('Gaurav Pandey', '27', '10000');

// Call method from Employee class using Object
$objOne->show();

class Manager extends Employee
{
    // Extra property for manager only(Extra incentive)
    public $ta = 1500;
    public $da = 800;

    public function show()
    {
        echo '<h1>Manager Profile</h1>';
        echo 'Name is '. $this->name ." and age is " . $this->age . ' and Salary ' . $this->salary + $this->ta + $this->da;
    }
}

// Create an object for Employee class
$objTwo = new Manager('Gaurav Manager', '30', '12000');

// Call method from Employee class using Object
$objTwo->show();

