<?php
	include("../config/init.php");

	$dbh = connect($hostname, $database, $username, $password, $port);
	/* liga a BD */
	/*tem de ser automatico
	$stmt = "INSERT INTO message ('message_id', 'message_name', 'message_email', 'message_subject', 'message_institution', 'message_text', 'organization_id')
	VALUES ('1', :name, :email, :subject, :institution, :text, '0')";
	/*automatico trocar 1
	$message = $_POST["message_name"];
	$email = $_POST["message_email"];
	$subject = $_POST["message_subject"];
	$institution = $_POST["message_institution"];
	$text = $_POST["message_text"];
	$stmt = bindParam(':name', $message);
	$stmt = bindParam(':email', $email);
	$stmt = bindParam(':subject', $subject);
	$stmt = bindParam(':institution', $institution);
	$stmt = bindParam(':text', $text);
	$stmt1 = $dbh->prepare( $stmt ) ;
	$result = $stmt1->execute();
	*/
	
	$query = "SELECT * FROM contact WHERE contact_id = 0";
	
	$stmt = $dbh->prepare( $query ) ;
	$result = $stmt->execute();
	
	$contacts = $stmt->fetch();
	
	$smarty->assign('contacts',$contacts);
	
	$smarty->display('../templates/contacts.tpl');