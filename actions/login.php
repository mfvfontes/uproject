<?php
		
	if ((isset($_SESSION['username']))){
		header("Location: profile.html");
		exit;
	}
	
	include_once("../config/init.php");
	
	if(isset($_POST["submit"])){
		
		$conn = connect($hostname, $database, $username, $password, $port);
	
		$user_username = $_POST['username'];
		$user_password = $_POST['password'];
		
		$result = $conn->prepare("SELECT * FROM user WHERE user_username= :username AND user_password= :password");
		$result->bindParam(':username', $user_username);
		$result->bindParam(':password', $user_password);
		$result->execute();
		$row = $result->fetch();
         
        if($row === false) { 
            header("Location: error.php?username=" . $user_username);
            exit;
        }
         
        session_start();
         
        $_SESSION['username'] = $user_username;
         
        header("Location:../pages/profile.php");
         
        exit;
		
	} else {
        header("Location: error.php?error=500");
        exit;
    }
?>