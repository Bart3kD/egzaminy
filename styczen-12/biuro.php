<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poznaj Europę</title>
    <link rel="stylesheet" href="styl9.css">
</head>
<body>
    <header>
        <h1>BIURO PODRÓŻY</h1>
    </header>
    <main>
        <section>
            <div id="left">
                <h2>Promocje</h2>
                <table>
                    <tr>
                        <td>Warszawa</td>
                        <td>od 600 zł</td>
                    </tr>
                    <tr>
                        <td>Wenecja</td>
                        <td>od 1200 zł</td>
                    </tr>
                    <tr>
                        <td>Paryż</td>
                        <td>od 1200 zł</td>
                    </tr>
                </table>
            </div>
            <div id="middle">
                <h2>
                    W tym roku jedziemy do...
                </h2>
                <!-- SKRYPT 1 -->
                 <?php 
                 $conn = mysqli_connect("localhost", "root", "", "podroze");
                 $query = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis ASC";
                 $res = $conn->query($query);
                
                 while($row = $res->fetch_assoc()){
                    echo "<img src='" . $row['nazwaPliku'] . "' alt='" . $row['podpis'] . "'>";
                 }
                 
                 $conn->close();
                 ?>
            </div>
            <div id="right">
                <h2>Kontakt</h2>
                <a href="biuro@wycieczki.pl">napisz do nas</a>
                <p>telefon: 444555666</p>
            </div>
        </section>
        <section id="dane">
            <h3>W poprzednich latach byliśmy...</h3>
            <ol>
                <!-- SKRYPT 2 -->
                <?php 
                 $conn = mysqli_connect("localhost", "root", "", "podroze");
                 $query = "SELECT cel, dataWyjazdu FROM `wycieczki` WHERE dostepna = 0;";
                 $res = $conn->query($query);
                
                 while($row = $res->fetch_assoc()){
                    echo "<li>Dnia " . $row['dataWyjazdu'] . " pojechaliśmy do " . $row['cel'] . "</li>";
                 }
                 
                 $conn->close();
                 ?>
            </ol>
        </section>
    </main>
    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>
</html>