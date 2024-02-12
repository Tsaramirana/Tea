<?php
	function mysqlConnect($database) 
	{
		$user = 'root';
		$pass = null;
		$dsn = 'mysql:host=localhost;dbname='.$database;

		try {
			$db = new PDO($dsn, $user, $pass);
			return $db;

		} catch (PDOException $e) {
			throw $e ;
		die();
		}
	}

	function orclConnect($user,$pass) 
	{
		$dsn = 'oci:dbname=//localhost:1521/orcl;charset=UTF8';

		try {
			$db = new PDO($dsn, $user, $pass);
			return $db;

		} catch (PDOException $e) {
			throw $e ;
		die();
		}
	}

	function pgConnect($database) 
	{
		$user = 'postgres';
		$pass = 'Irina_00';
		$dsn = 'pgsql:host=localhost;port=5432;dbname='.$database;

		try {
			$db = new PDO($dsn, $user, $pass);
			return $db;

		} catch (PDOException $e) {
			throw $e ;
		die();
		}
	}

	function myConnect (){
		$connection = mysqlConnect("tea");
		return $connection;
	}

	function close($db)
	{
		$db=null;
	}

	function getAllElementsFromTestTable()
	{
	    // Connexion à la base de données
	    $db = myConnect() ;

	    // Préparation de la requête SQL
	    $query = "SELECT * FROM test";

	    // Exécution de la requête
	    $stmt = $db->query($query);

	    // Récupération des résultats sous forme d'un tableau associatif
	    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	    // Fermeture de la connexion
	    $db = null;

	    return $results;
	}

	/* 	exemple de donnees
		create table test (
			id int,
			nomTest varchar (30),
			laDate date 
		);

		$id = 1;
	    $nomTest = "Test d'insertion";
	    $laDate = date("Y-m-d"); // Date actuelle
	*/
	function insertElementIntoTestTable($id, $nomTest, $laDate)
	{
	    // Connexion à la base de données
	    $db = mysqlConnect ();

	    // Préparation de la requête SQL
	    $query = "INSERT INTO test (id, nomTest, laDate) VALUES (:id, :nomTest, :laDate)";
	    $stmt = $db->prepare($query);

	    // Liaison des paramètres
	    $stmt->bindParam(':id', $id);
	    $stmt->bindParam(':nomTest', $nomTest);
	    $stmt->bindParam(':laDate', $laDate);

	    // Exécution de la requête
	    $stmt->execute();

	    // Fermeture de la connexion
	    $db = null;
	}

	function updateElementInTestTable($id, $newNomTest, $newLaDate)
	{
	    // Connexion à la base de données
	    $db = mysqlConnect ();

	    // Préparation de la requête SQL
	    $query = "UPDATE test SET nomTest = :nomTest, laDate = :laDate WHERE id = :id";
	    $stmt = $db->prepare($query);

	    // Liaison des paramètres
	    $stmt->bindParam(':nomTest', $newNomTest);
	    $stmt->bindParam(':laDate', $newLaDate);
	    $stmt->bindParam(':id', $id);

	    // Exécution de la requête
	    $stmt->execute();

	    // Fermeture de la connexion
	    $db = null;
	}

	function deleteElementFromTestTable($id)
	{
	    // Connexion à la base de données
	    $db = mysqlConnect ();

	    // Préparation de la requête SQL
	    $query = "DELETE FROM test WHERE id = :id";
	    $stmt = $db->prepare($query);

	    // Liaison des paramètres
	    $stmt->bindParam(':id', $id);

	    // Exécution de la requête
	    $stmt->execute();

	    // Fermeture de la connexion
	    $db = null;
	}

//IrinaGit23
?>