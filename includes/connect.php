<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "databank_php";

try {
 	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

 	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
 	echo "Connection Failed: " . $e->getMessage();
}

	$query = $conn->prepare("SELECT * FROM characters");
 	$query->execute();
 	$result = $query->fetchall();

function img{
	foreach ($result as $name) {
		echo $name['image'] 	
	}
}
?>