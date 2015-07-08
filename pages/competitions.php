<?php
	include("../config/init.php");

	$dbh = connect($hostname, $database, $username, $password, $port);
	
	$query = "SELECT competition.competition_id, competition.competition_name, competition.competition_description, competition.competition_url, image.image_alt, image.image_url, competitionimage.competition_id, competitionimage.image_id
			  FROM competition, competitionimage, image
			  WHERE competition.competition_id = competitionimage.competition_id
			  AND image.image_id = competitionimage.image_id";
			  
	$stmt = $dbh->prepare( $query ) ;
	
	$result = $stmt->execute();
	$imagens = $stmt->fetchAll();
	$query = "SELECT competition.name, competition_description
			  FROM competition";
			  
	$stmt = $dbh->prepare( $query ) ;
	
	$result = $stmt->execute();
	
	$smarty->assign('images',$images);
	
	$smarty->display('../templates/competitions.tpl');