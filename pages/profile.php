<?php
	include("../config/init.php");

	$dbh = connect($hostname, $database, $username, $password, $port);
	
	$query = "SELECT * FROM user WHERE user_username = :username;";
	
	$stmt = $dbh->prepare( $query ) ;
	$stmt->bindParam(':username', $_SESSION['username']);
	$result = $stmt->execute();
	
	$users = $stmt->fetch();
	
	$query = "SELECT * FROM image WHERE image_id = :userimage_id;";
	$stmt = $dbh->prepare( $query ) ;
	$stmt->bindParam(':userimage_id', $users['userimage_id']);
	$result = $stmt->execute();
	
	$images = $stmt->fetch();
	
	$smarty->assign('users',$users);
	$smarty->assign('images',$images);
	$smarty->assign('section','perfil');

	$smarty->display('../templates/profile.tpl');
?>