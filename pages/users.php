<?php
	include("../config/init.php");

	
	$smarty->assign('section','direção');

	$smarty->display('../templates/users.tpl');