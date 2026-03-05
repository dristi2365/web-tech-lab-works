<?php
// Q3: Display user inserted values from form

$name = $_POST['name'];
$email = $_POST['email'];
$gender = isset($_POST['gender']) ? $_POST['gender'] : "Not selected";
$course = $_POST['course'];
$hobbies = isset($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : "None selected";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Data</title>
</head>
<body>

    <h1>Submitted Details</h1>

    <p><b>Full Name:</b> <?php echo $name; ?></p>
    <p><b>Email:</b> <?php echo $email; ?></p>
    <p><b>Gender:</b> <?php echo $gender; ?></p>
    <p><b>Course:</b> <?php echo $course; ?></p>
    <p><b>Hobbies:</b> <?php echo $hobbies; ?></p>

    <br>
    <a href="q3.html">Go Back</a>

</body>
</html>