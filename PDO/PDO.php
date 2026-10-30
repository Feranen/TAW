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

    $dsn = 'mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8mb4';
    try {
        $pdo = new PDO($dsn, $username, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Success";


    } catch (PDOException $e) {
        die("Could not connect. " . $e->getMessage());
    }

    try {
        $sql = "SELECT idObiekt, plik, nazwa FROM obiekty WHERE panstwo = 'Islandia';";
        // Execute the SQL query
        $result = $pdo->query($sql);
        // Process the result set
        if ($result->rowCount() > 0) {
            echo "<table><tr><th>ID</th><th>plik</th><th>nazwa</th></tr>";
            // Output data of each row
            while ($row = $result->fetch()) {
                echo "<tr>";
                echo "<td>" . $row['idObiekt'] . "</td>";
                echo "<td>" . $row['plik'] . "</td>";
                echo "<td>" . $row['nazwa'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            unset($result);
        } else {
            echo "No records found.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $pdo = null;
    ?>
</body>

</html>