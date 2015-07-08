<html>
	<head>
		<meta charset="utf-8">
	</head>
    <body>
        <p style = "color: green">
        <?php
            if(isset($_GET["username"]))
                echo "O utilizador: " . $_GET["username"] . " não existe ou está errado.";
            else if(isset($_GET["error"]))
                echo "Error: " . $_GET["error"];
        ?>
        <a href = "../pages/signin.php">Go Back</a>
        </p>
    </body>
</html>