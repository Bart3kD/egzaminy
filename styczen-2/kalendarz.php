<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadania na lipiec</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <?php 
        $conn = mysqli_connect("localhost", "root", "", "terminarz");
        $query1 = "SELECT DISTINCT wpis FROM zadania WHERE wpis != '' AND wpis IS NOT NULL AND dataZadania BETWEEN '2020-07-01' AND '2020-07-07';";
        $query2 = "SELECT dataZadania, wpis FROM zadania WHERE miesiac LIKE 'lipiec';";

        $res1 = mysqli_query($conn, $query1);
        $res2 = mysqli_query($conn, $query2);
    ?>
    <header>
        <div class="head first">
            <img src="logo1.png" alt="lipiec">
        </div>
        <div class="head second">
            <h1>TERMINARZ</h1>
            <p>najbliższe zadania: <?php while($row = $res1->fetch_assoc()){
                echo $row["wpis"] . "; " ;
            }?></p>
        </div>
    </header>
    <main>
        <?php 
            while($row = $res2->fetch_assoc()){
                echo  "<div class='block'>";
                echo  "<h6>" . $row['dataZadania'] . "</h6>";
                echo  "<p>" . $row['wpis'] . "</p>";
                echo  "</div>";
            }
        ?>
    </main>
    <footer>
        <a href="sierpien.html">Terminarz na sierpień</a>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>
</html>