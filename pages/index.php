<?php
	include("../config/init.php");
	
	$dbh = connect($hostname, $database, $username, $password, $port);

	$query = "SELECT news.news_title, news.news_date, news.news_text, image.image_alt, image.image_url 
			  FROM news, newsimage, image
			  WHERE news.news_id = newsimage.news_id
			  AND image.image_id = newsimage.image_id
			  ORDER BY news.news_id DESC LIMIT 4;";
	
	$stmt = $dbh->prepare( $query ) ;
	$result = $stmt->execute();
	
	$news = $stmt->fetchAll();
	
	$query = "SELECT project.project_name, project.project_description, image.image_alt, image.image_url, project_startdate
			  FROM project, projectimage, image
			  WHERE project.project_id = projectimage.project_id
			  AND image.image_id = projectimage.image_id
			  AND project.project_finished = 0
			  ORDER BY project.project_id DESC LIMIT 4;";
	
	$stmt = $dbh->prepare( $query ) ;
	$result = $stmt->execute();
	
	$unfinished_projects = $stmt->fetchAll();
	
	$query = "SELECT project.project_name, project.project_description, image.image_alt, image.image_url, project_startdate
			  FROM project, projectimage, image
			  WHERE project.project_id = projectimage.project_id
			  AND image.image_id = projectimage.image_id
			  AND project.project_finished = 1
			  ORDER BY project.project_id DESC LIMIT 4;";
	
	$stmt = $dbh->prepare( $query ) ;
	$result = $stmt->execute();
	
	$finished_projects = $stmt->fetchAll();
	
	$smarty->assign('news',$news);
	$smarty->assign('unfinished_projects',$unfinished_projects);
	$smarty->assign('finished_projects',$finished_projects);
	
	$smarty->display('../templates/index.tpl');