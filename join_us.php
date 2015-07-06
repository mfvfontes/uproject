<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>UProject</title>
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<link href="css/style2.css" rel="stylesheet">
</head><!--/head-->

<body id="home" class="homepage">

	<!-- loading -->
	<div id="preloader">
		<div id="load">
			<img src="images/uproject_logo_128.png" height="49px" width="50px" style="margin-top: -13px; margin-left: -28px;">
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
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo" style= "max-width: 200px" ></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
						<li class="scroll"><img src = "images/dots_vertical.png" id = "thumb_menu" onmouseover="this.src='images/dots.png'" 							  onmouseout="this.src='images/dots_vertical.png'"></li>
                        <li class="scroll"><a href="competitions.html" id = "green_border">Competições</a></li>
                        <li class="scroll"><a href="join_us.html" id  = "red_border">Junta-te a nós</a></li>
						<li class="scroll"><a href="contacts.html" id = "orange_border">Contatos</a></li>
						<li class="scroll"><a id = "search_header"><span class = "glyphicon glyphicon-search"></span></a></li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->
	

    <section id="services" >
        <div class="container">
			<div class="section-header">
				<h2 class="section-title text-center wow fadeInDown">Junta-te a nós</h2>
				<p class="text-center wow fadeInDown">A nossa equipa está sempre à procura de novas ideias para revolucionar o mundo</p>
				<p class="text-center wow fadeInDown">Se achas que tens o que é preciso para entrar nesta missão, inscreve-te abaixo</p>
			</div>
			<form id="main-join_us-form" name="join_us-form" method="post" action="#" onsubmit="return validateForm();">
				<div id = "row">
					<div class="col-sm-6">
						<div class="form-group wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
							<label for="exampleInputEmail1">Nome</label>
							<input type="text" name="name" class="form-control" id="exampleInputEmail1" style="max-width: 400px;min-width=200px">
							<label for="exampleInputEmail1">Instituição</label>
							<input type="text" name="institution" class="form-control" id="exampleInputEmail1" style="max-width: 400px;min-width=200px" required>
							<label for="exampleInputEmail1" style="max-width: 400px;min-width=200px;display:block">Texto</label>
							<textarea class = "form-control" name="text" type="text" cols="20" rows="5" style="max-width: 400px;min-width=200px; display:block" placeholder="texto" required></textarea>				
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
							<label for="exampleInputEmail1" style="max-width: 400px;min-width=200px">Carta de Motivação</label><br>
							<span class="file-input btn btn-primary btn-file"><input type="file" name="letter" size="chars" accept="application/pdf" placeholder="carta">Escolher Carta de Motivação...</span>
							<label for="exampleInputEmail1" style="max-width: 400px;min-width=200px">Curriculum Vitae</label><br>
							<span class="file-input btn btn-primary btn-file"><input type="file" name="curriculum" size="chars" accept="application/pdf" placeholder="curriculo">Escolher Ficheiro...</span>
							<div class = "after_uploads">
								<button type="submit" class="btn btn-primary">Enviar</button>
							</div>
						</div>
					</div>
				</div>
			</form>
	</section>
			<footer id="header">
		        <nav id="main-menu" class="navbar navbar-default navbar-fixed-bottom" role="banner">
		            <div class="container">
		                <div class="collapse navbar-collapse navbar-right">
		                    <ul class="nav navbar-nav">
		                        <li style = "padding-top: 0px"><a href="#competitions" id = "green_border_bottom"></a></li>
		                        <li class=""><a href="#partners" id  = "red_border_bottom"></a></li>
								<li class=""><a href="#join" id = "orange_border_bottom"></a></li>
		                    </ul>
							<ul id = "footer_menu">
								<li id = "footer_menu_li"><a href = "about_us.html" class = "nolink">Organização</a></li>
								<li id = "footer_menu_li"><a href = "competitions.html" class = "nolink">Competições</a></li>
								<li id = "footer_menu_li"><a href = "join_us.html" class = "nolink">Junta-te a nós</a></li>
								<li id = "footer_menu_li"><a href = "parcerias.html" class = "nolink">Parcerias</a></li>
								<li id = "footer_menu_li"><a href = "faq.html" class = "nolink">FAQ´s</a></li>
							</ul>
		                </div>
						<div class="collapse navbar-collapse navbar-left">
							<div id = "row">
								<div class="col-sm-1" style="padding-top: 15px">
								<a href="https://www.facebook.com/"><img height="25" id=social-icon" src="images/facebook.png"></a>
								<a href="https://plus.google.com/"><img height="25" id=social-icon" src="images/googleplus.png"></a>
								<a href="https://www.twitter.com/"><img height="25" id=social-icon" src="images/twitter.png"></a>
								</div>
								<div class="col-sm-2 col-sm-offset-2">
									<img src = "images/feup.png" class = "img_bottom">
								</div>
								<div class="col-sm-2 col-sm-offset-5">
									<img src = "images/colgaia.png" class = "img_bottom">
								</div>
							</div>

		                </div>
		            </div><!--/.container-->
		        </nav><!--/nav-->
		    </footer><!--/footer-->
	
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/mousescroll.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/validate.js"></script>
</body>
</html>