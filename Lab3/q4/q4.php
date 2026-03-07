<?php
// Q4: Write a server-side program to read a file and display the content using table

$filename = "data.txt";

if (!file_exists($filename)) {
    echo "File not found!";
    exit;
}

$file = fopen($filename, "r");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Read File</title>
</head>
<body>

    <h1>File Contents</h1>

    <table border="1" cellpadding="8">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Course</th>
        </tr>

        <?php
        while (!feof($file)) {
            $line = fgets($file);
            if ($line) {
                $data = explode(",", trim($line));
                echo "<tr>";
                echo "<td>" . $data[0] . "</td>";
                echo "<td>" . $data[1] . "</td>";
                echo "<td>" . $data[2] . "</td>";
                echo "</tr>";
            }
        }
        fclose($file);
        ?>

    </table>

</body>
</html>