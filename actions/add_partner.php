<?php
	include("../config/init.php");
	
	
	$dbh = connect($hostname, $database, $username, $password, $port);
	$query = "INSERT INTO request (request_name,request_institution,request_text) VALUES (:name,:institution,:text);";
	$stmt = $dbh->prepare( $query ) ;
	$name=$_POST["name"];
	$institution=$_POST["institution"];
	$text=$_POST["text"];
	$stmt->bindParam(':name',$name);
	$stmt->bindParam(':institution', $institution);
	$stmt->bindParam(':text',$text);
	$result = $stmt->execute();
	header("parcerias.php");
?>
