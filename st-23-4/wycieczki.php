<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki po Europie</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <header>
        <h1>BIURO TURYSTYCZNE</h1>
    </header>
    <section>
        <h3>Wycieczki, na które są wolne miejsca</h3>
        <ul>
            <!-- SKRYPT 1 -->
             <?php 
                $conn = mysqli_connect("localhost", "root", "", "biuro");
                $query = "SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna != 0;";
                $res = $conn->query($query);
                while($row = $res->fetch_assoc()) {
                    echo "<li>".$row["id"].". dnia ".$row["dataWyjazdu"]." jedziemy do ".$row["cel"].", cena: ".$row["cena"]."</li>";
                };
                $conn->close()
             ?>
        </ul>
    </section>
    <main>
        <div class="left">
            <h3>Bestselery</h3>
            <table>
                <tr>
                    <td>Wenecja</td>
                    <td>kwiecień</td>
                </tr>
                <tr>
                    <td>Londyn</td>
                    <td>lipiec</td>
                </tr>
                <tr>
                    <td>Rzym</td>
                    <td>wrzesień</td>
                </tr>
            </table>
        </div>
        <div class="middle">
            <h2>Nasze zdjęcia</h2>
            <!-- SKRYPT 2 -->
            <?php 
                $conn = mysqli_connect("localhost", "root", "", "biuro");
                $query = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis DESC;";
                $res = $conn->query($query);
                while($row = $res->fetch_assoc()) {
                    echo "<img src='".$row["nazwaPliku"]."' alt='".$row["podpis"]."'>";
                };
                $conn->close()
             ?>
        </div>
        <div class="right">
            <h2>Skontaktuj się</h2>
            <a href="turysta@wycieczki.pl">napisz do nas</a>
            <p>telefon: 111222333</p>
        </div>
    </main>
    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>
</html>