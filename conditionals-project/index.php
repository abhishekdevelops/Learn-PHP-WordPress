<?php

//Define percentage
$percentage=68;

//Assign grade based on percentage
if($percentage>=90)
{
    $grade="A+";
}
elseif($percentage>=75){
    $grade="A";
}
elseif($percentage>=60){
    $grade="B";
}
elseif($percentage>=40){
    $grade="C";
}
else{
 $grade="F";
}

echo "Percentage:$percentage%<br>";
echo "Grade:$grade<br>";

switch($grade)
{
    case "A+":
        $feedback="Outstanding!";
        break;
        case "A";
        $feedback="Excellent";
        break;
        case "B";
        $feedback="Good Job!";
        break;
        case "C";
        $feedback="Needs Improvement";
        break;
        case "F";
        $feedback="Failed. Try again";
        break;
        default:
        $feedback="Invalid Grade";
}
echo "Feedback:$feedback";
?>