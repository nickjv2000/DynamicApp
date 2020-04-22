<?php

function GetDatabaseConnection(){
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$dbname = "databank_php";


	try {
 		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
 		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 		return $conn;
	}
	catch(PDOException $e){
 		echo "Connection Failed: " . $e->getMessage();
	}
}


function GetChars(){
	$conn = GetDatabaseConnection();
	$query = $conn->prepare("SELECT count('id') AS total FROM characters");
	$query->execute();
    $result = $query->fetchall();
    foreach ($result as $count) {
        echo "<h1>alle " . $count['total'] . " characters uit de database</h1>"; 
    }
}

function GetGameId($id){
	$conn = GetDatabaseConnection();
    $query = $conn->prepare("SELECT * FROM characters WHERE id = :id");
    $query->bindParam(":id", $id);
    $query->execute();
    return $query->fetch();
}
?>