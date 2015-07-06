<?php

	$dir = "hexrid";

	if(isset($_POST["submit"])){
	
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		$dbh = new PDO('mysql:host=http://www.hexrid.tk;dbname=hexrid', "hexrid", "hexrid");
		
		die();
		
		$stmt = $db->prepare("SELECT username FROM Users WHERE username = ? AND password = ?");
		$stmt->execute(array($username, $password));
		
		$row = $stmt->fetch();
		
		if($row === false) { /*if no user was found (based on the username and password at the same time)*/
			header("Location: error.php?username=" . $username);
			exit;
		}
		
		session_start();
		
		$_SESSION["username"] = $username;
		
		header("Location:dashboard.php");
		
		exit;
		
	} else {
		header("Location: error.php?error=500");
		exit;
	}

?>