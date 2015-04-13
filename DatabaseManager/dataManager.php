<?php
//Authors: Josef Polodna && Dr. Sigman as based off of code from previous semester

abstract class DataManager{
	private $connString;  // connection string to db
	private $user;        // db user account name
	private $passWord;    // db user account password
	private $pdo;         // PDO object representing a connection to db

	//constructor
	function __construct(){
		$this->connString = 'mysql:host='.DBHOST.';dbname='.DBNAME;
		// add the port if specified
		if(DBPORT!='') {
			$this->conString = $connString.DBPORT;
		}
		$this->user=DBUSER;
		$this->passWord=DBPASSWORD;
	}
	
	//connect to the db
	protected function connect(){
		try {
			$this->pdo=new PDO($this->connString,$this->user, $this->passWord);
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (PDOException $e) {
			die($e->getMessage());
		}
	}
	
	// disconnect from the db
	protected function dissconnect(){
		$this->pdo = null;
	}
	
	/**
		Queries the database using a specified query
	*/
	protected function doQuery($query, $preparedStmt=false, $dataValues=NULL) {
		if(!$preparedStmt){
			$result = $this->pdo->query($query);
		}
		else {
			// dataValues must be non-null and properly completed or
			// the following code will error out
			$stmt = $this->pdo->prepare($query);
			$stmt->execute($dataValues);
			$result = $stmt->fetchAll();
		}
		return $result;
	}
	
	/**
		Execute a non-query SQL statement.
	*/
	protected function doNonQuery($query, $preparedStmt=false, $dataValues=NULL) {
		if(!$preparedStmt){
			$count = $this->pdo->exec($query);
		}
		else {
			// dataValues must be non-null and properly completed or
			// the following code will error out
			$stmt = $this->pdo->prepare($query);
			$stmt->execute($dataValues);
			$count = $stmt->rowCount();
		}
		return $count;
	}
  }
?>