<?php
	include("../config/init.php");

	$dbh = connect($hostname, $database, $username, $password, $port);
	
	$query = "SELECT * FROM faq";

	$stmt = $dbh->prepare( $query ) ;
	$result = $stmt->execute();
	
	$faqs = $stmt->fetchAll();
	$smarty->assign('faq',$faqs);
	
	$smarty->display('../templates/faq.tpl');