<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
$conn=mysqli_connect($servername, $username, $password, $dbname) or die (mysqli_error());
if (!$conn) {
	die("Connection failed ".mysqli_connect_error());
	}