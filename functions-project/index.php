<?php
//Functions project-Grade Calculator
function calculateGrade($percentage)
{
    if($percentage>=90){
        return "A+";
    } elseif($percentage>=75){
        return "A";
    } elseif($percentage>=60){
        return "B";
    } elseif($percentage>=40){
        return "C";
    } else{
        return "F";
    }
}

//Call the function
$percentage=82;
$grade=calculateGrade($percentage);

//output the result
echo "Percentage:$percentage<br>";
echo "Grade:$grade<br>";


//feedback
function getFeedback($grade){
    switch($grade){
case "A+":
    return "Outstanding performance";
    case "A":
        return "Excellent job";
        case "B":
            return "Good work";
            case "C":
                return "Needs improvement";
                case "F":
                    return "You need to study harder";
                    default:
                    return "Invalid grade";


    }
}
 
$feedback=getFeedback($grade);
echo "Feedback : $feedback";

?>