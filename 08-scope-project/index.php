<?php

//User-Info Formatter-Scope and Built-in functions
$name="Abhishek";
$age=26;

//Global function to calculate years left to 100
function yearsToHundred()
{
    global $age;
    $yearsLeft=100-$age;
    echo "You have $yearsLeft years to turn 100.<br>";

}

// Static counter function to simulate login count
function loginCounter(){
   static  $count=0;
    $count++;
    echo "Login count:$count<br>";
}

//Using built-in Strig functions
function formatName($name){
    echo "Original Name: $name<br>";
    echo "Uppercase: " . strtoupper($name) . "<br>";
    echo "Lowercase: " . strtolower($name) . "<br>";
    echo "Length: " . strlen($name) . "<br>";
}

//Call all functions
formatName($name);
yearsToHundred();
loginCounter();
loginCounter();
loginCounter();

?>