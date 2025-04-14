<?php
// Define marks for 3 subjects
$math=78;
$science=89;
$english=73;

//Calculate total and percentage
$total=$math+$science+$english;
$percentage=($total/300)*100;

//Output to check values
echo "Total Marks: $total<br>";
echo "Percentage: $percentage%<br>";

//Check if student passed all subjects
if($math>=40 && $science>=40 && $english>=40){
    echo "Result:Pass<br>";
} else {
    echo "Result:Fail<br>";
}

//Grade based on percentage
if($percentage>=90)
{
    echo "Grade:A+";

} elseif($percentage>=75){
    echo "Grade:A";
}
elseif($percentage>=60){
    echo "Grade:B";
}
elseif($percentage>=40){
    echo "Grade:C";
}
else{
    echo "Grade:F";
}

?>