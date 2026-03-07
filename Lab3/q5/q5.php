<?php
// Q5: Validate login and redirect to welcome page or show error

$validUsername = "admin";
$validPassword = "123456";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == $validUsername && $password == $validPassword) {
    header("Location: welcome.php?username=$username");
    exit;
} else {
    echo "<h2 style='color:red;'>❌ Invalid username or password!</h2>";
    echo "<a href='q5.html'>Go Back</a>";
}
?>