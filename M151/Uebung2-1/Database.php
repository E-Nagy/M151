<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "northwind";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully<br />";

mysqli_select_db($conn, $database);

echo "Datenbank ausgewählt!<br />";

$sql = "select * from customers where job_title = 'PurchasingRepresentative' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo $result->num_rows . " Resultate <br/>";
} else {
    echo "Keine Resultate vorhanden <br/>";
}

echo "<pre>";
var_dump($result);
echo "</pre>";

mysqli_close($conn);
?>