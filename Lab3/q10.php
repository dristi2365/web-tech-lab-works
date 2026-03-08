<?php
// Q10: Write a PHP program to demonstrate working of classes and objects
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Classes and Objects</title>
</head>
<body>

<h1>Classes and Objects in PHP</h1>

<?php
// Define a class
class Student {

    // Properties
    public $name;
    public $age;
    public $course;

    // Constructor
    public function __construct($name, $age, $course) {
        $this->name = $name;
        $this->age = $age;
        $this->course = $course;
    }

    // Method to display student details
    public function displayDetails() {
        echo "<p><b>Name:</b> " . $this->name . "</p>";
        echo "<p><b>Age:</b> " . $this->age . "</p>";
        echo "<p><b>Course:</b> " . $this->course . "</p>";
        echo "<hr>";
    }

    // Method to check if student is adult
    public function isAdult() {
        if ($this->age >= 18) {
            echo "<p>" . $this->name . " is an adult!</p>";
        } else {
            echo "<p>" . $this->name . " is not an adult!</p>";
        }
    }
}

// Create objects
$student1 = new Student("Ram", 20, "BSc CSIT");
$student2 = new Student("Sita", 17, "BCA");
$student3 = new Student("Harry", 22, "BIT");

// Display details
echo "<h2>Student Details</h2>";
$student1->displayDetails();
$student2->displayDetails();
$student3->displayDetails();

// Check if adult
echo "<h2>Adult Check</h2>";
$student1->isAdult();
$student2->isAdult();
$student3->isAdult();
?>

</body>
</html>