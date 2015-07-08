<?php /* Smarty version 3.1.27, created on 2015-07-08 15:42:52
         compiled from "/usr/users2/mieic2012/ei12183/public_html/uproject-smarty/templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1105883365559d28dc6a7474_31622754%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65a63d901009fdf5b0288233dd901f1e2dbf38f1' => 
    array (
      0 => '/usr/users2/mieic2012/ei12183/public_html/uproject-smarty/templates/header.tpl',
      1 => 1436362912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1105883365559d28dc6a7474_31622754',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_559d28dc7ae719_49980305',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_559d28dc7ae719_49980305')) {
function content_559d28dc7ae719_49980305 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1105883365559d28dc6a7474_31622754';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>UProject</title>
	<!-- core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">
    <link href="../css/owl.carousel.css" rel="stylesheet">
    <link href="../css/owl.transitions.css" rel="stylesheet">
    <link href="../css/prettyPhoto.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/bootstrap.css">


    <?php echo '<script'; ?>
 type="text/javascript" src="../js/modernizr.custom.32033.js"><?php echo '</script'; ?>
>

    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="../js/html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../js/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->       
    <link rel="shortcut icon" href="../images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">
	<link href="../css/style2.css" rel="stylesheet">
	<?php echo '<script'; ?>
 src="../js/validate.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
	
	
		<?php echo '<script'; ?>
>
			function showResult(str) {
			  if (str.length==0) { 
				document.getElementById("livesearch").innerHTML="";
				document.getElementById("livesearch").style.border="0px";
				return;
			  }
			  if (window.XMLHttpRequest) {
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			  } else {  // code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			  }
			  xmlhttp.onreadystatechange=function() {
				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
				  document.getElementById("livesearch").innerHTML=xmlhttp.responseText;
				  document.getElementById("livesearch").style.border="1px solid #A5ACB2";
				}
			  }
			  xmlhttp.open("GET","livesearch.php?q="+str,true);
			  xmlhttp.send();
			}
		<?php echo '</script'; ?>
>
	
	
	
	
	
</head><!--/head-->

<body id="home" class="homepage">

<!-- loading -->
	<div id="preloader">
		<div id="load">
			<img src="../images/uproject_logo_128.png" height="49px" width="50px" style="margin-top: -13px; margin-left: -28px;">
		</div>
	</div>
	<!-- loading -->


   <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../pages/index.php"><img src="../images/logo.png" alt="logo" style= "max-width: 200px"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right" id="navbaritems">
                    <ul class="nav navbar-nav">
						<li class="scroll"><img src = "../images/dots_vertical.png" id = "thumb_menu"></li>
                        <li class="scroll"><a href="../pages/competitions.php" id = "green_border">Competições</a></li>
                        <li class="scroll"><a href="../pages/join_us.php" id  = "red_border">Junta-te a nós</a></li>
						<li class="scroll"><a href="../pages/contacts.php" id = "orange_border">Contatos</a></li>
						<li><form>
							<input type="text" size="30" onkeyup="showResult(this.value)">
							<div id="livesearch"></div>
						</form></li>



                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header--><?php }
}
?>