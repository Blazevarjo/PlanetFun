<?php

$servername = "localhost";
$username = "root";
$password = "password";
$dbName = "planet_fun";

// Create connection
$conn = mysqli_connect($servername, $username, NULL, $dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$id = $_POST["planetary_system_id"];

$sql = "DELETE FROM planetary_system WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Deleted successfully id: " . $id;
}
mysqli_close($conn);
