<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynajem pokoi</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <header>
        <h1>Pensjonat pod dobrym humorem</h1>
    </header>
    <main>
        <div id="left">
            <a href="index.hhtml">GŁÓWNA</a>
            <img src="1.jpg" alt="pokoje">
        </div>
        <div id="middle">
            <a href="cennik.php">CENNIK</a>
            <?php 
                $conn = mysqli_connect("localhost", "root", "", "wynajem");
                $query = "SELECT * FROM pokoje;";
                $res = $conn->query($query);
                echo "<table>";
                while ($row = $res->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$row["id"]."</td>";
                    echo "<td>".$row["nazwa"]."</td>";
                    echo "<td>".$row["cena"]."</td>";
                    echo "</tr>";
                };
                echo "</table>";
                $conn->close()
            ?>
        </div>
        <div id="right">
            <a href="kalkulator.html">KALKULATOR</a>
            <img src="3.jpg" alt="pokoje">
        </div>
    </main>
    <footer>
        <p>Stronę opracował: 00000000000</p>
    </footer>
</body>
</html>