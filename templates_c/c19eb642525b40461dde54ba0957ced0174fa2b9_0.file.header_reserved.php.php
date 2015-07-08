<?php /* Smarty version 3.1.27, created on 2015-07-07 19:38:32
         compiled from "/usr/users2/mieic2012/ei12183/public_html/uproject-smarty/pages/header_reserved.php" */ ?>
<?php
/*%%SmartyHeaderCode:704883581559c0e98ab5d33_12885116%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c19eb642525b40461dde54ba0957ced0174fa2b9' => 
    array (
      0 => '/usr/users2/mieic2012/ei12183/public_html/uproject-smarty/pages/header_reserved.php',
      1 => 1436290708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '704883581559c0e98ab5d33_12885116',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_559c0e98b7eef5_35420443',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_559c0e98b7eef5_35420443')) {
function content_559c0e98b7eef5_35420443 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '704883581559c0e98ab5d33_12885116';
echo '<?php 
';?>include("../config/init.php");

	$dbh = connect($hostname, $database, $username, $password, $port);
	
	$query = "SELECT username FROM user WHERE user_username = :username;";
	
	$stmt = $dbh->prepare( $query ) ;
	$stmt->bindParam(':username', $_SESSION['username']);
	$result = $stmt->execute();
	
	$users = $stmt->fetch();
	
	$smarty->assign('username',$users);
	
	$smarty->display('../templates/header_reserved.tpl');<?php }
}
?>