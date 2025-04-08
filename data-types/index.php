<?php
$name="Abhishek";
echo"<h3>String Example:</h3>";
echo"<p>Name: {$name}</p>";

$age="25";
echo"<h3>Integer Example:</h3>";
echo"<p>Age: {$age}</p>";

$height="5.9";
echo"<h3>Float Example:</h3>";
echo"<p>Height: {$height}</p>";

$is_active=true;
echo"<h3>Boolean Example:</h3>";
echo"<p>Is Active: {$is_active}</p>";

$colors=array("Red","Green","Blue");
echo"<h3>Array Example:</h3>";
echo "<p>Colors: " . implode(", ", $colors) . "</p>";

class Person {
    public $name;
    public $age;
    public function __construct($name, $age){
        $this->name=$name;
        $this->age=$age;

    }
}

$person1=new Person("John",30);
$person2=new Person("Ravi",28);

echo"<p>Person1: {$person1->name},Age: {$person1->age}</p>";
echo"<p>Person2: {$person2->name},Age: {$person2->age}</p>";



?>