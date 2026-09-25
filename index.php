<?php
$correctLogin = "admin";
$CorrectPassword = "tajne123";
session_start();
if (isset($_SESSION["name"]) && isset($_SESSION["pass"])) {
    if ($_SESSION["name"] == $correctLogin && $_SESSION["pass"] == $CorrectPassword) {
        header("Location: panel.php");
    }
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
    if (isset($_POST["name"]) && isset($_POST["pass"])) {
        $_SESSION["name"] = $_POST["name"];
        $_SESSION["pass"] = $_POST["pass"];
        if ($_SESSION["name"] == $correctLogin && $_SESSION["pass"] == $CorrectPassword) {
            header("Location: panel.php");
            exit();

        } else {
            echo "Błędny login lub hasło";
        }
    }

    ?>
    <form action="" method="post">
        <input type="text" name="name" id="name">
        <label for="name">Login</label>
        <input type="password" name="pass" id="pass">
        <label for="pass">Password</label>
        <button type="submit">Log in</button>
    </form>

</body>

</html>