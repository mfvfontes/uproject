<?
	include("../config/init.php");


	$dbh = connect($hostname, $database, $username, $password, $port);
	
	$query = "SELECT * FROM user";
	
	$stmt = $dbh->prepare( $query ) ;
	$result = $stmt->execute();
	
	$users = $stmt->fetchAll();
	
	$smarty->assign('users',$users);
	$smarty->assign('section','direção');
	
	$smarty->display('../templates/permissions.tpl');