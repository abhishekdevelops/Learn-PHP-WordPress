<?php
echo"<h1>Arithmetic Operators</h1>";

//Define two numbers
$num1=20;
$num2=8;

//Addition
$sum=$num1 + $num2;
echo"<h3>Addition:</h3><p>{$num1} + {$num2}={$sum}</p>";

//Subtraction
$diff=$num1-$num2;
echo"<h3>Subtraction:</h3><p>{$num1}-{$num2}={$diff}</p>";

//Multiplication
$product=$num1*$num2;
echo"<h3>Multiplication:</h3><p>{$num1}*{$num2}={$product}</p>";

//Division
$division=$num1/$num2;
echo"<h3>Division:</h3><p>{$num1} / {$num2}={$division}</p>";

//Modulus
$remainder = $num1 % $num2;
echo"<h3>Modulus:</h3><p>{$num1} / {$num2}={$remainder}</p>";

//Exponentiation
$power=$num1 ** $num2;
echo"<h3>Exponentiation:</h3><p>{$num1} ** {$num2}={$power}</p>";

?>