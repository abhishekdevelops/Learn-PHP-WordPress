<?php
// Step 1: Create Multidimensional Associative Array
$students = [
    "Abhishek" => [
        "Math" => 90,
        "Science" => 85,
        "English" => 88
    ],
    "John" => [
        "Math" => 78,
        "Science" => 82,
        "English" => 80
    ],
    "Sara" => [
        "Math" => 92,
        "Science" => 89,
        "English" => 95
    ]
];

// Step 2: Display Student Marks using a loop
echo "<h2>Student Marks Table:</h2>";

foreach ($students as $studentName => $subjects) {
    echo "<h3>Student: $studentName</h3>";
    echo "<ul>";
    
    foreach ($subjects as $subject => $marks) {
        echo "<li>$subject: $marks</li>";
    }
    
    echo "</ul>";
}
?>
