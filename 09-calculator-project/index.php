<?php
//Simple Calculator


//Addition
function add($num1,$num2){
    return $num1+$num2;
}
$num1=10;
$num2=5;
$result=add($num1,$num2);
echo "Addition of $num1 and $num2 is :$result";
echo"<hr>";

//Subtraction
function sub($num1,$num2){
    return $num1-$num2;
}
$num1=10;
$num2=5;
$result=sub($num1,$num2);
echo "Subtraction of $num1 and $num2 is :$result";
echo"<hr>";

//Multiplication
function multi($num1,$num2){
    return $num1*$num2;
}
$num1=10;
$num2=5;
$result=multi($num1,$num2);
echo "Multiplication of $num1 and $num2 is :$result";
echo"<hr>";

//Division
function div($num1, $num2) {
    if ($num1 == 0 && $num2 == 0) {
        return "Error: 0 divided by 0 is undefined";
    }
    if ($num2 == 0) {
        return "Error: Division by zero is not allowed";
    }
    return $num1 / $num2;
}
$num1=10;
$num2=5;
$result=div($num1,$num2);
echo "Division of $num1 and $num2 is :$result";
?>
