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

$eventName = $_POST['eventName'];
echo var_dump($eventName);
$sql = "DELETE FROM $tablename WHERE name = '$eventName'";
$results = $conn->query($sql);

$sql = "DROP TABLE $eventName";
$results = $conn->query($sql);

?>