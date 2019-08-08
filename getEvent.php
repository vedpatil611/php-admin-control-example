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

$sql = "SELECT id,name FROM $tablename";
$res = $conn->query($sql);

while($array[] = $res->fetch_object());
array_pop($array);

?>