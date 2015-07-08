<?php

session_start();

error_reporting(E_ERROR|E_WARNING);

include("../config/conection.php");

// Smarty
include_once('../lib/smarty/Smarty.class.php');
$smarty = new Smarty;
$smarty->template_dir = '../templates/';
$smarty->compile_dir = '../templates_c/';

// Messages
$smarty->assign('ERROR_MESSAGES', $_SESSION['error_messages']);
$smarty->assign('FIELD_ERRORS', $_SESSION['field_errors']);
$smarty->assign('SUCCESS_MESSAGES', $_SESSION['success_messages']);
$smarty->assign('FORM_VALUES', $_SESSION['form_values']);

unset($_SESSION['success_messages']);
unset($_SESSION['error_messages']);
unset($_SESSION['field_errors']);
unset($_SESSION['form_values']);

?>