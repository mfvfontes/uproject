<?php
	
	
	if (!(isset($_SESSION['username']))){
		header("Location: ../pages/index.html");
		exit;
	}
	
	include_once("../config/init.php");
	
	$smarty->display('../templates/statistics.tpl');