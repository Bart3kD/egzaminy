<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sierpniowy kalendarz</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <header>
        <div class="first">
            <h1>Organizer: SIERPIEŃ</h1>
        </div>
        <div class="second">
            <form action="organizer.php" method="POST">
                <label for="wydarzenie">Zapisz wydarzenie:</label>
                <input type="text" name="wydarzenie" title="wydarzenie">
                <input type="submit" value="OK">
            </form>
            <?php 
                $conn = mysqli_connect("localhost", "root", "", "kalendarz");
                if(isset($_POST["wydarzenie"]) && !empty($_POST["wydarzenie"])){
                    $wydarzenie = $_POST["wydarzenie"];
                    $query = "UPDATE zadania SET wpis = '$wydarzenie' WHERE dataZadania LIKE '2020-08-09';";
                    $conn->query($query);
                    $conn->close();
                }
            ?>
        </div>
        <div class="third">
            <img src="logo2.png" alt="sierpień">
        </div>
    </header>
    <main>
        <!-- SKRYPT 1 -->
         <?php 
            $conn = mysqli_connect("localhost", "root", "", "kalendarz");
            $query = "SELECT dataZadania, wpis FROM zadania WHERE miesiac = 'sierpien';";
            $res = $conn->query($query);
            while ($row = $res->fetch_assoc()){
                echo "<div>";
                echo "<h5>".$row["dataZadania"]."</h5>";
                echo "<p>".$row["wpis"]."</p>";
                echo "</div>";
            }
         ?>
    </main>
    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>
</html>