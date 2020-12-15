<?php

// What is a variable

// Variable types

/*
    String
    Integer
    Float/Double
    Boolean
    Null
    Array
    Object
    Resource
*/

// Declare variables
$name = 'Zura';
$age = 28;
$height = 1.85;
$isMale = true;
$salary = null;

// Print the variables. Explain what is concatenation
echo $name . '<br>';
echo $age . '<br>';
echo $height . '<br>';
echo $isMale . '<br>';
echo $salary . '<br>';

// Print types of the variables
echo gettype($name) . '<br>';
echo gettype($age) . '<br>';
echo gettype($height) . '<br>';
echo gettype($isMale) . '<br>';
echo gettype($salary) . '<br>';

// Print the whole variable
var_dump($name, $age, $height, $isMale, $salary);

// Change the value of the variable
$name = false;

// Print type of the variable
echo gettype($name);

// Variable checking functions
is_string($name); // false
is_int($age); // true
is_bool($isMale); // true
is_double($height); // true

// Check if variable is defined
isset($name); // true
isset($address); // false it's not declare

// Constants
define('PI', 3.14);
echo PI . '<br>';

// Using PHP built-in constants
echo SORT_ASC;
echo PHP_INT_MAX;
