<?php

$servername="localhost";
$username="root";
$password="";
$dbname="sports";
$tablename="sports";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
	die("Connection failed");
}

$sql = "SELECT * FROM $tablename";
$res = $conn->query($sql);
// $id = 1 + $res->num_rows;

$eventName = $_POST['name'];
$lim = (int) $_POST['limit'];

$sql = "INSERT INTO $tablename(name, Capacity) VALUES('$eventName', '$lim')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
}

$sql = "CREATE TABLE IF NOT EXISTS $eventName(rollNo INT, name VARCHAR(30), PRIMARY KEY(rollNo))";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
}

?>