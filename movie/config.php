<?php
$servername = "localhost";
$username = "fbeni";  // vagy az adatbázis felhasználóneve
$password = "DutchGiant2";      // vagy az adatbázis jelszava
$dbname = "fbeni";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
