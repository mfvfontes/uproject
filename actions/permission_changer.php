<?php
	if(isset($_POST['submit'])){
	
		include_once("../config/init.php");
	
		$conn = connect($hostname, $database, $username, $password, $port);
	
		$user_username = $_POST['user_username'];
		$userrole_id = $_POST['userrole_id'];
		
		$result = $conn->prepare("UPDATE user SET userrole_id = :userrole_id WHERE user_username= :user_username;");
		$result->bindParam(':user_username', $user_username);
		$result->bindParam(':userrole_id', $userrole_id);
		$result->execute();
	
		header("Location: ../pages/profile.php");
		exit;
	}
?>