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
 ?>