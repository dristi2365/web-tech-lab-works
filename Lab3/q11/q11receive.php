<?php
// Receive variables passed through URL

$name   = $_GET['name'];
$age    = $_GET['age'];
$course = $_GET['course'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Details</title>
</head>
<body>

    <h1>Student Details</h1>
    <p><b>Name:</b> <?php echo $name; ?></p>
    <p><b>Age:</b> <?php echo $age; ?></p>
    <p><b>Course:</b> <?php echo $course; ?></p>

    <br>
    <a href="q11.php">Go Back</a>

</body>
</html>