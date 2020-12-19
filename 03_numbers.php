<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo ($a + $b) * $c . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>';
echo $a / $b . '<br>';
echo $a % $b . '<br>';

// Assignment with math operators
//$a += $b; echo $a . '<br>';
//$a -= $b; echo $a . '<br>';
//$a *= $b; echo $a . '<br>';
//$a /= $b; echo $a . '<br>';
//$a %= $b; echo $a . '<br>';


// Increment operator
echo $a++ . '<br>';
echo $a . '<br>';
echo ++$a . '<br>';
echo $a . '<br>';

// Decrement operator
echo $a-- . '<br>';
echo $a . '<br>';
echo --$a . '<br>';
echo $a . '<br>';

// Number checking functions
is_float(1.23); //true
is_double(5.43); //true
is_int(4); //true
is_numeric('4.54'); //true
is_numeric('4f.54') . '<br>'; //false

// Conversion
$strNumber = '3.14';
var_dump((intval($strNumber))) . '<br>';
var_dump(floatval($strNumber)) . '<br>';

// Number functions
echo abs(-3);// 3
echo pow(2, 3);// 8
echo sqrt(16); // 16
echo max(2, 5, 1); // 5
echo min(2, 5, 1); // 1
echo round(2.4); // 2
echo round(2.6); // 3
echo floor(2.6); // 2
echo ceil(2.3) . '<br>'; // 3

// Formatting numbers
$num = 7775544.43434;
echo number_format($num, 7, '!', ' ');


// https://www.php.net/manual/en/ref.math.php
