<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
$conn=mysqli_connect($servername, $username, $password, $dbname) or die (mysqli_error());
$sql = "CREATE TABLE taekwondo (
id_taekwondo INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
negara VARCHAR(30) NOT NULL,
emas VARCHAR(10) NOT NULL,
perak VARCHAR(10) NOT NULL,
perunggu VARCHAR(10) NOT NULL,
jumlah VARCHAR (10) NOT NULL
)";
if (!$conn) {
	die("Connection failed ".mysqli_connect_error());
	}
?>