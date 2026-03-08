<?php
// Q9: Write PHP script to demonstrate passing variables with cookies

// Set cookies
setcookie("username", "John", time() + (86400), "/");
setcookie("course", "BSc CSIT", time() + (86400), "/");
setcookie("college", "TU", time() + (86400), "/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookies Demo</title>
</head>
<body>

    <h1>Passing Variables with Cookies</h1>

    <?php
    if (isset($_COOKIE['username'])) {
        echo "<p><b>Username:</b> " . $_COOKIE['username'] . "</p>";
        echo "<p><b>Course:</b> " . $_COOKIE['course'] . "</p>";
        echo "<p><b>College:</b> " . $_COOKIE['college'] . "</p>";
    } else {
        echo "<p>Cookies not set yet! Please refresh the page.</p>";
    }
    ?>

    <br>
    <a href="q9.php">Refresh to see cookies</a>

</body>
</html>