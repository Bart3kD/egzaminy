<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ważenie samochodów ciężarowych</title>
    <link rel="stylesheet" href="styl.css">
</head>

<?php
header("refresh: 10;");
?>

<body>
    <header>
        <section class="headerOne">
            <h1>Ważenie pojazdów we Wrocławiu</h1>
        </section>
        <section class="headerTwo">
            <img src="obraz1.png" alt="waga">
        </section>
    </header>
    <main>
        <section class="mainLeft">
            <h2>Lokalizacje wag</h2>
            <ol>
                <!-- SKRYPT 1 -->
                 <?php 
                    $conn = mysqli_connect("localhost:3307","root", "", "wazenietirow");
                    $query1 = "SELECT ulica FROM lokalizacje;";
                    $res1 = $conn->query($query1);
                    while ($row = $res1->fetch_assoc()) {
                        echo "<li>ulica".$row["ulica"]."</li>";
                    };
                 ?>
            </ol>
            <h2>Kontakt</h2>
            <a href="mailto:wazenie@wroclaw.pl">napisz</a>
        </section>
        <section class="mainMiddle">
            <h2>Alerty</h2>
            <table>
                <tr>
                    <td>rejestracja</td>
                    <td>ulica</td>
                    <td>waga</td>
                    <td>dzień</td>
                    <td>czas</td>
                </tr>
                <!-- SKRYPT 2 -->
                <?php
                    $query2 = "SELECT rejestracja, waga, dzien, czas, l.ulica FROM wagi w JOIN lokalizacje l ON w.lokalizacje_id = l.id WHERE waga > 5;";
                    $res2 = $conn->query($query2);
                    while ($row = $res2->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>".$row["rejestracja"]."</td>";
                        echo "<td>".$row["waga"]."</td>";
                        echo "<td>".$row["dzien"]."</td>";
                        echo "<td>".$row["czas"]."</td>";
                        echo "<td>".$row["ulica"]."</td>";
                        echo "</tr>";
                    };                    
                ?>
            </table>
            <!-- SKRYPT 3 -->
             <?php
                $query3 = "INSERT INTO wagi(lokalizacje_id, waga, rejestracja, dzien, czas) VALUES ('5', FLOOR(RAND()*10+1), 'DW12345', CURRENT_DATE, CURRENT_TIME);";
                $conn->query($query3);
                $conn->close();
             ?>
        </section>
        <section class="mainRight">
            <img src="obraz2.jpg" alt="tir">
        </section>
    </main>
    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>
</html>