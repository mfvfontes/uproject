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


    <script type="text/javascript" src="../js/modernizr.custom.32033.js"></script>

    <!--[if lt IE 9]>
    <script src="../js/html5shiv.js"></script>
    <script src="../js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="../images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../images/ico/apple-touch-icon-57-precomposed.png">
	<link href="../css/style2.css" rel="stylesheet">
	<script src="../js/validate.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	
	{literal}
		<script>
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
		</script>
	{/literal}
	
	
	
	
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
    </header><!--/header-->