<?php

//for loop
echo "<h3>Multiplication of table of 5</h3>";
for($i=1;$i<=10;$i++){
    echo "5 x $i=" . (5*$i)."<br>";
}
echo "<hr>";

//while loop
echo "<h3>Countdown using while loop</h3>";

$count=5;
while ($count>=1){
    echo "Count: $count<br>";
    $count--;
}
echo"<hr>";

//do-while loop
echo"<h3>Repeat message using do-while loop</h3>";

$i=1;
do{
echo "This is message number $i<br>";
$i++;
}
while($i<=3);
echo "<hr>";

//for each loop
echo "<h3>Subject marks using for each loop</h3>";

$subjects = [

    "Math" =>85,
    "Science" => 78,
    "English" => 92
];

foreach($subjects as $subject => $mark){
    echo "$subject:$mark<br>";
}
?>