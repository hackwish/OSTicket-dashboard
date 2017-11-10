<?php 

$servername = "127.0.0.1";
$username = "USER";
$password = "PASSWORD";
$dbname = "OSTICKET_DB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else {
//	echo "OK";
}

//var_dump($sql);
 ?>