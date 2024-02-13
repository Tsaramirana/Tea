<?php
	function mysqlConnect($database) 
	{
	  $user = 'root';//'ETU002405' ;
	  $pass = null;//'CAyW45fe39hz' ;
	  $dsn = 'mysql:host=localhost;dbname='.$database;//'mysql:host=172.20.0.167;dbname='.$database ;
	
	  try {
		$db = new PDO($dsn, $user, $pass);
		return $db;
	
	  } catch (PDOException $e) {
		throw $e ;
	  die();
	  }
	}

	function myConnect (){
		$connection = mysqlConnect("tea");//myConnect('db_p16_ETU002405'); 
		return $connection;
	}

	/*function myConnect(){
		try {
			$connexion = new PDO('mysql:host=172.20.0.167;dbname=db_p16_ETU002405','ETU002405','CAyW45fe39hZ');
		} catch (PDOException $e) {
			echo "Erreur de connexion : " . $e->getMessage();
			die();
		}
		return $connexion;
	}*/
//IrinaGit23
?>