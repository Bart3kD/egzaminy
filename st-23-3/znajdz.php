<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kwiaty</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <h1>Grupa Polskich Kwiaciarni</h1>
    </header>
    <main>
        <section id="left">
            <h2>Menu</h2>
            <ol>=
                <li>
                    <a href="index.html">Strona główna</a>
                </li>
                <li>
                    <a href="https://www.kwiaty.pl" target="_blank">Rozpoznaj kwiaty</a>
                </li>
                <li>
                    <a href="znajdz.php">Znajdź kwiaciarnię</a>
                </li>
                <ul>
                    <li>W Warszawie</li>
                    <li>W Malborku</li>
                    <li>W Poznaniu</li>
                </ul>
            </ol>
        </section>
        <section id="right">
            <h2>Znajdź kwiaciarnię</h2>
            <form action="znajdz.php" method="POST">
                <label for="miasto">Podaj nazwę miasta:</label>
                <input type="text" name="miasto" title="miasto">
                <input type="submit" value="SPRAWDŹ">
            </form>
            <?php 
                $conn = mysqli_connect("localhost", "root", "", "kwiaciarnia");
                if(isset($_POST['miasto']) && !empty($_POST['miasto'])){
                    $miasto = $_POST['miasto'];
                    $query = "SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto LIKE '$miasto';";
                    $res = $conn->query($query);
                    while($row = $res->fetch_assoc()){
                        echo "<h3>".$row["nazwa"].", ".$row["ulica"]."</h3>";
                    }
                    $conn->close();
                }
            ?>
        </section>
    </main>
    <footer>
        <p>Stronę opracował: 00000000000</p>
    </footer>
</body>
</html>