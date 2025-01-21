<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hodowla świnek morskich</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Hodowla świnek morskich - zamów świnkowe maluszki</h1>
    </header>
    <main>
        <section>
            <nav>
                <a href="peruwianka.php">Rasa Peruwianka</a>
                <a href="american.php">Rasa American</a>
                <a href="crested.php">Rasa Crested</a>
            </nav>
            <div>
                <img src="crested.jpg" alt="Świnka morska rasy crested">
                <!-- SKRYPT 2 -->
                <?php 
                    $conn = mysqli_connect('localhost', 'root', '', 'hodowla');
                    $query2 = "SELECT DISTINCT s.data_ur, s.miot, r.rasa FROM swinki s JOIN rasy r ON s.rasy_id = r.id WHERE r.id = 7;";
                    $res2 = $conn->query($query2);
                    while ($row = mysqli_fetch_array($res2)) {
                        echo("<h2>Rasa: $row[2]</h2>");
                        echo("<p>Data urodzenia: $row[0]</p>");
                        echo("<p>Oznaczenie miotu: $row[1]</p>");
                    };
                ?>
                <hr>
                <h2>Świnki w tym miocie</h2>
                <!-- SKRYPT 3 -->
                 <?php
                    $query3 = "SELECT imie, cena, opis FROM swinki WHERE rasy_id = 7;";
                    $res3 = $conn->query($query3);
                    while ($row = mysqli_fetch_array($res3)) {
                        echo("<h3>$row[0] - $row[1] zł</h3>");
                        echo("<p>$row[2]</p>");
                    };
                 ?>
            </div>
        </section>
        <aside>
            <h3>Poznaj wszystkie rasy świnek morskich</h3>
            <ol>
                <!-- SKRYPT 1 -->
                 <?php 
                    $query1 = "SELECT rasa FROM rasy;";
                    $res1 = $conn->query($query1);
                    while ($row = mysqli_fetch_array($res1)){
                        echo("<li>$row[0]</li>");
                    };
                 ?>
            </ol>
        </aside>
    </main>
    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>
</html>