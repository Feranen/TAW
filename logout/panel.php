<?php
session_start();
$CorrectLogin = "admin";
$CorrectPassword = "tajne123";
if (isset($_SESSION["name"]) && isset($_SESSION["pass"])) {
    if ($_SESSION["name"] == $CorrectLogin && $_SESSION["pass"] == $CorrectPassword) {
        $_POST = array();
    } else {
        header("HTTP/1.1 401 Unauthorized");
        session_unset();
        exit;
    }
} else {
    header("HTTP/1.1 400 Bad Request");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_SESSION["name"]) && $_SESSION["pass"]) {
        echo "Hello " . $_SESSION["name"];
    }
    ?>

    <form action="logout.php" method="post">
        <button type="submit">Log out</button>
    </form>
</body>

</html>