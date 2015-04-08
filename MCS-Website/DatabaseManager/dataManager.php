<?php
  include_once 'dbConfig.php';
  
  // The DataManager class encapsulates the basic database functionality.
  // Connection information comes from the the configuration file, dbConfig.php.
  // The class must be extended to provide the database functionality necessary
  // for a given application.  
  //
  // Please Note:  All application database access should be through a "database 
  // layer"" that is constructed by the dataManager and its derived classes.  No
  // database connectivity or query code should occur in any PHP script besides
  // the ones in the database layer.
  abstract class DataManager {
  	private $connString;  // connection string to db
	private $user;        // db user account name
	private $passWord;    // db user account password
	private $pdo;         // PDO object representing a connection to db
	
	function __construct() {
		$this->connString = 'mysql:host='.DBHOST.';dbname='.DBNAME;
		// add the port if specified
		if(DBPORT!='') {
			$this->conString = $connString.DBPORT;
		}
		$this->user=DBUSER;
		$this->passWord=DBPASSWRD;
	}
	
	// Create a connection to the database
	protected function connect(){
		try {
			$this->pdo=new PDO($this->connString,$this->user, $this->passWord);
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		catch (PDOException $e) {
			die($e->getMessage());
		}
	}
	
	// Disconnect from the database
	protected function disconnect() {
		$this->pdo = null;
	}
	
	// Query the database using a select query.
	//
	// $query - the SQL query to issue. If preparedStmt is false, $query is a
	//          string representing an SQL Select statement.  Otherwise, it 
	//          it is a string representing a prepared statement with ? marking
	//          where data values must be inserted.
	// $preparedStmt - indicates a prepared statement is being passed to the
	//                 function.  The default value is false.
	// $dataValues - an array of the data values to insert into the prepared statement.
	//               The order of the data values in the array much match the order they are
	//               needed in the statement.
	//               ex.  array($value-1, ... $value-n)
	// 
	// return - an array containing the rows retrieved is returned. 
	//          
	//
	// Note: If the query is not a prepared statement, then it is the responsibility of the
	//       caller to ensure any user input has been sanitized and that the statement is
	//       a well formed SQL statement.
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
	
	// Execute a non-query SQL statement.
	// $query - the SQL query to issue. If preparedStmt is false, $query is a
	//          string representing an SQL Select statement.  Otherwise, it 
	//          it is a string representing a prepared statement with ? marking
	//          where data values must be inserted.
	// $preparedStmt - indicates a prepared statement is being passed to the
	//                 function.  The default value is false.
	// $dataValues - an array of the data values to insert into the prepared statement.
	//               The order of the data values in the array much match the order they are
	//               needed in the statement.
	//               ex.  array($value-1, ... $value-n)
	//
	// return - the number of statements effected by the 
	//
	// Note: If the query is not a prepared statement, then it is the responsibility of the
	//       caller to ensure any user input has been sanitized and that the statement is
	//       a well formed SQL statement. 
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