<?php
$conn = mysqli_connect("localhost","root", "", "wedkarstwo");
$lowisko = $_POST["Lowisko"];
$data = $_POST["Data"];
$sedzia = $_POST["Sedzia"];
$query = "INSERT INTO zawody_wedkarskie (Karty_wedkarskie_id, Lowisko_id, data_zawodow, sedzia ) VALUES (0, $lowisko, '$data', '$sedzia');";
$conn->query($query);
$conn->close();
?>