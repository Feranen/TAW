<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $host = "localhost";
    $username = "root";
    $pass = "";
    $db = "szkola";
    header("refresh: 3;");

    $conn = new mysqli($host, $username, $pass, $db);

    if ($conn->connect_error) {
        die('MySQL ERROR: ' . $conn->connect_error);
    } else {
        echo "Object connectiuon succesful";
    }


    $conn->close();
    ?>
</body>

</html>