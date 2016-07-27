<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";

$con = new mysqli($servername,$username, $password, $dbname);
if ($conn->connect_error){
	die("Connection failed: ");
}

$sql = "SELECT firstname, lastname FROM t1";
$result = $conn->query($sql);
if ($result -> num_rows>0) {
	while($row=$result->fetch_assoc()) {
	echo "Mame: "-$row["firstname"]." ".$row["lastname"]."<br>";
	}
} else {
	echo "no results";
}

$conn->close();
?></hi>