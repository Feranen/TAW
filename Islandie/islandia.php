<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islandia</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <aside>
        <h3>Do zwiedzania</h3>
        <ul>
            <li>Wodospady:
                <ol>
                    <?php
                    $adress = "localhost";
                    $login = "root";
                    $pass = "";
                    $dbName = "islandia";
                    $conn = mysqli_connect($adress, $login, $pass, $dbName);
                    $query = 'SELECT nazwa FROM obiekty WHERE panstwo = "Islandia" AND idRodzaj = 10;';
                    $result = mysqli_query($conn, $query);
                    while ($fetched = mysqli_fetch_row($result)) {
                        echo "<li>{$fetched['0']}</li>";
                    }


                    mysqli_close($conn);
                    ?>
                </ol>
            </li>
            <li>Siedliska zwierząt:
                <ol>
                    <?php
                    $adress = "localhost";
                    $login = "root";
                    $pass = "";
                    $dbName = "islandia";
                    $conn = mysqli_connect($adress, $login, $pass, $dbName);
                    $query = 'SELECT nazwa FROM obiekty WHERE panstwo = "Islandia" AND idRodzaj = 14;';
                    $result = mysqli_query($conn, $query);
                    while ($fetched = mysqli_fetch_row($result)) {
                        echo "<li>{$fetched['0']}</li>";
                    }


                    mysqli_close($conn);
                    ?>
                </ol>
            </li>
        </ul>
    </aside>
    <header>
        <h1><a href="islandia.php">Zwiedzaj Islandię</a></h1>
    </header>

    <main>
        <h2>Galeria</h2>
        <section>

        </section>
    </main>

    <footer>
        <hr>
        <p>Autor: Fer</p>
    </footer>

</body>

</html>