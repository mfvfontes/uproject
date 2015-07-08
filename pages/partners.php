<?php
	
	include("../config/init.php");

	$dbh = connect($hostname, $database, $username, $password, $port);
	
	$query = "SELECT * FROM user WHERE user_username = :username;";
	
	$stmt = $dbh->prepare( $query ) ;
	$stmt->bindParam(':username', $_SESSION['username']);
	$result = $stmt->execute();
	
	$users = $stmt->fetch();
	
	$query = "SELECT partner.partner_id,partner.partner_name,partner.partner_info, partnerimage.image_id, image.image_url 
FROM partner, image, partnerimage
WHERE partner.partner_id = partnerimage.partner_id
AND image.image_id = partnerimage.image_id";
	
	$stmt = $dbh->prepare( $query ) ;
	$result = $stmt->execute();
	
	$partners = $stmt->fetchAll();
	
	
	
	
	$smarty->assign('partners',$partners);
	$smarty->assign('section','parceiros');

	$smarty->display('../templates/partners.tpl');