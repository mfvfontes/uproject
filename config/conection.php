<?
	/* Ligação à BD*/
	$hostname = "sql4.freemysqlhosting.net";
	$database = "sql483053";
	$username ="sql483053";
	$password = "hU7*yD5!";
	$port = 3306;
	
	
	
	/* Função inserir da DB */
	function insert_to_db($dbh, $table, $values, $fields){
		try{
			$undf_values_str = implode(", ", array_fill(0, count($values), "?"));
			
			$query = 'INSERT INTO ' . $table;
				
			$fields_str = implode(', ', $fields);
			$query = $query . '(' .  $fields_str . ')';
						
			$query = $query . ' VALUES (' . $undf_values_str . ');';
				
			$stmt = $dbh->prepare($query);
			
			$result = $stmt->execute($values);
				
			return $result;
			
		} catch(PDOException $e){
			echo $e->getMessage();
			return null;
		}
	}
	
	/* Conectar a DB*/
	function connect($hostname, $db_name, $username, $password, $port){
		try{		
			$dbh = new PDO('mysql:host='.$hostname.';port=' . $port .';dbname='.$db_name,$username,$password);
			$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			$dbh->exec("set names utf8");
			return $dbh;
			
		} catch(PDOException $pdoe){
			
			echo $pdoe->getMessage();
			die();
		}
	}
	
	/* Desconectar*/
	
	function disconnect(&$dbh){
		$dbh = null;
	}
	
	//$dbh = connect($dbm, $db_name);
	
	//insert_to_db($dbh, 'user', array(NULL, "marcio", "12345678", "mfvfontes@gmail.com"), array("id", "username", "password", "email"));
	
	//disconnect($dbh);
?>
