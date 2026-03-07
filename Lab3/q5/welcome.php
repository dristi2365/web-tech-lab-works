<?php
// Welcome page after successful login

$username = $_GET['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
</head>
<body>

    <h1>Welcome, <?php echo $username; ?>! 🎉</h1>
    <p>You have successfully logged in.</p>
    <br>
    <a href="q5.html">Logout</a>

</body>
</html>