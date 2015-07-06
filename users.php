<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>U. Project - Área Reservada</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap2.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script src="js/validate.js"></script>

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="profile.html"><img src="images/logo.png" height="35"></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Bruno Silva <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
				 <li>
                        <a href="profile.html"><i class="fa fa-fw fa-user"></i> Perfil</a>
                    </li>
				<li class="active">
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-users"></i> Direção <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                           <li>
								<a href="statistics.html"><i class="fa fa-fw fa-bar-chart-o"></i> Estatística</a>
							</li>
                            <li>
                                <a href="permissions.html"><i class="fa fa-fw fa-key"></i> Permissões</a>
                            </li>
							<li>
                                <a href="users.html"><i class="fa fa-fw fa-plus"></i> Adicionar utilizador</a>
                            </li>
                        </ul>
                    </li>  
                    <li>
                        <a href="partners.html"><i class="fa fa-fw fa-institution"></i> Parceiros</a>
                    </li>    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Utilizadores <small>Gerir os utilizadores da base de dados</small>
                        </h1> 
                    </div>
                </div>
                <!-- /.row -->

				<div class="row">
                <div class="col-sm-12">
					<form name="new-user" method="post" action="message.php" onsubmit="return validateForm_register();"><h3 id="subtitleVerde">Novo Utilizador:</h3>
                        <div class="form-group">Nome:
                            <input style="width: 50%;" type="text" id="fname" class="form-control" placeholder="Nome" required>
                        </div>
                        <div class="form-group">Apelido:
                            <input style="width: 50%;" type="text" id="lname" class="form-control" placeholder="Apelido" required>
                        </div>
                        <div class="form-group">Username:
                            <input style="width: 50%;" type="text" id="username" class="form-control" placeholder="username" required>
                        </div>
						<div class="form-group">Password:
                            <input style="width: 50%;" type="password" id="password" class="form-control" placeholder="password" required>
                        </div>
                        <div class="form-group">E-mail:
                            <input style="width: 50%;" type="email" id="email" class="form-control" placeholder="e-mail" required>
                        </div>
						<div class="form-group">Telemóvel:
                            <input style="width: 50%;" type="tel" id="phone" class="form-control" placeholder="telemóvel" required>
                        </div>
						<div class="form-group">Páginas de trabalho(separados por vírgulas, sem espaços):
                            <input type="text" id="worklinks" class="form-control" placeholder="worklinks" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Inserir</button>
					</form>
				</div>
            </div>
				
				
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
