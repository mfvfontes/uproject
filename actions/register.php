<?php
session_start();
// Se não estiver logado manda para trás
if(isset($_SESSION["username"]))
{
	if(isset($_POST['submit']))
	{
			//ligar a bd
		
			include("../config/init.php");
			$dbh = connect($hostname, $database, $username, $password, $port);
			
			// Obter dados
			$user_name = $_POST['user_name'];
			$user_surname = $_POST['user_surname'];
			$user_username = $_POST['user_username'];
			$user_password = $_POST['user_password'];
			$user_email = $_POST['user_email'];
			$user_phone = $_POST['user_phone'];
			$userrole_id = $_POST['userrole_id'];
			$userimage_id = $_POST['userimage_id'];
			$user_name = addslashes($user_name);
			$user_surname = addslashes($user_surname);
			$user_username = addslashes($user_username);
			$user_password = addslashes($user_password);
			$user_email = addslashes($user_email);
			$user_phone = addslashes($user_phone);
			$userrole_id = addslashes($userrole_id);
			$userimage_id = addslashes($userimage_id);
			
			// Verificar se username tem 6 ou menos caracteres -> ERRO 1
			
			if (strlen($user_username) <= 5)
			{
				$errmsg_arr[] = 'Your username must have more than 6 characters';
				$errflag = true;
				exit();
			}
			
			// Verificar se o password tem 5 ou menos caracteres -> ERRO 2
			if (strlen($user_password) <= 5) 
			{
				$errmsg_arr[] = 'Your password must have more than 5 characters';
				$errflag = true;
				exit();
			}
			
			// Verificar se existem contas com o mesmo nome e email 
			$val = $dbh->prepare("SELECT user_username, user_email FROM user WHERE user_username = :user_username AND user_email= :user_email");
			$val->bindParam(':user_username', $user_username);
			$val->bindParam(':user_email', $user_email);
			$val->execute();
			
			$rows = $val->fetch(PDO::FETCH_NUM);
			if($rows > 0)
			{
				
				$errmsg_arr[] = 'Username or email already exist';
				$errflag = true;
				exit(0);
			}

			//registar
			$stmt = $dbh->prepare("INSERT INTO user (user_username, user_password, user_name, user_surname, user_email, user_phone, userrole_id, userimage_id) 
			VALUES (:user_username, :user_password, :user_name, :user_surname, :user_email, :user_phone, :userrole_id, :userimage_id)");
			$stmt->bindParam(':user_username', $user_username);
			$stmt->bindParam(':user_password', $user_password);
			$stmt->bindParam(':user_name', $user_name);
			$stmt->bindParam(':user_surname', $user_surname);
			$stmt->bindParam(':user_email', $user_email);
			$stmt->bindParam(':user_phone', $user_phone);
			$stmt->bindParam(':userrole_id', $userrole_id);
			$stmt->bindParam(':userimage_id', $userimage_id);
			
			$stmt->execute();

			header ("Location: ../pages/users.php");
			
			exit;
			
	}
}	
else
{
	header("location: signin.php");
	echo "You are not logged in!";
}
?>