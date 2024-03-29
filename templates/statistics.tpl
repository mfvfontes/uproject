<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>U. Project - �rea Reservada</title>

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
	
	<!-- google api-->
	<!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Head-Admins',<?php
		  $dbh = connect($hostname, $database, $username, $password, $port);
		  $query = "SELECT COUNT(*) AS count FROM user WHERE userrole_id = 0;";
	
		  $stmt = $dbh->prepare( $query ) ;
		  $result = $stmt->execute();
	
		  $users = $stmt->fetch();
		  ?><?=$users['count']?>],
          ['Admins', <?php
		  $dbh = connect($hostname, $database, $username, $password, $port);
		  $query = "SELECT COUNT(*) AS count FROM user WHERE userrole_id = 1;";
	
		  $stmt = $dbh->prepare( $query ) ;
		  $result = $stmt->execute();
	
		  $users = $stmt->fetch();
		  ?><?=$users['count']?>],
          ['Head-Members', <?php
		  $dbh = connect($hostname, $database, $username, $password, $port);
		  $query = "SELECT COUNT(*) AS count FROM user WHERE userrole_id = 2;";
	
		  $stmt = $dbh->prepare( $query ) ;
		  $result = $stmt->execute();
	
		  $users = $stmt->fetch();
		  ?><?=$users['count']?>],
          ['Members', <?php
		  $dbh = connect($hostname, $database, $username, $password, $port);
		  $query = "SELECT COUNT(*) AS count FROM user WHERE userrole_id = 3;";
	
		  $stmt = $dbh->prepare( $query ) ;
		  $result = $stmt->execute();
	
		  $users = $stmt->fetch();
		  ?><?=$users['count']?>]
        ]);
		

        // Set chart options
        var options = {'title':'N�mero de utilizadores de cada tipo',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>


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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>{$smarty.session.username} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
				 <li {if $section eq "perfil"} class = "active" {/if}>
                        <a href="../pages/profile.php"><i class="fa fa-fw fa-user"></i> Perfil</a>
                    </li>
					
				 {if $users['userrole_id'] eq 0}
				
				<li {if $section eq "dire��o"} class = "active" {/if}>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-users"></i> Dire��o <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                           <li> 
								<a href="../pages/statistics.php"><i class="fa fa-fw fa-bar-chart-o"></i> Estat�stica</a>
							</li>
                            <li>
                                <a href="../pages/permissions.php"><i class="fa fa-fw fa-key"></i> Permiss�es</a>
                            </li>
							<li>
                                <a href="../pages/users.php"><i class="fa fa-fw fa-plus"></i> Adicionar utilizador</a>
                            </li>
                        </ul>
                    </li> 
					{/if}
                    <li {if $section eq "parceiros"} class = "active" {/if}>
                        <a href="../pages/partners.php"><i class="fa fa-fw fa-institution"></i> Parceiros</a>
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
                            Estat�sticas <small>Dados sobre a utiliza��o do website</small>
                        </h1> 
                    </div>
                </div>
                <!-- /.row -->
                <!--Div that will hold the pie chart-->

				<div class="row">
                    <div class="col-lg-4">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Gr�fico 1</h3>
                            </div>
                            <div class="panel-body">
                                    <div id="chart_div"></div>
                            </div>
                        </div>
                    </div>
                </div>

				
				
				
				
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
		
		{include file='footer_reserved.tpl'}