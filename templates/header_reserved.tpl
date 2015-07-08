<html lang="en">

<head>
{if isset($smarty.session.username)}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>U. Project - Área Reservada</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap2.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel="shortcut icon" href="../images/ico/favicon.ico">

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
                <a class="navbar-brand" href="../pages/profile.php"><img src="../images/logo.png" height="35"></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>{$smarty.session.username}<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="../actions/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
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
				
				<li {if $section eq "direção"} class = "active" {/if}>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-users"></i> Direção <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                           <li> 
								<a href="../pages/statistics.php"><i class="fa fa-fw fa-bar-chart-o"></i> Estatística</a>
							</li>
                            <li>
                                <a href="../pages/permissions.php"><i class="fa fa-fw fa-key"></i> Permissões</a>
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
		
	{else}
	<meta http-equiv="refresh" content="0;url=../pages/signin.php">
	{/if}