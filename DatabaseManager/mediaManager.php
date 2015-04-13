<?php
	include_once 'dataManager.php';
	include_once dirname(__FIlE__).'/../siteModel/media.class.php';
	
	class BlogDataManager extends DataManager {
		
		function __construct(){
			parent::__construct();
		}
		
		/**
			Returns the media all the media stored in the db in the form of an array
		*/
		public function getMedia() {
			$query = 'select * from media;';
			$this->connect();
			$result = $this->doQuery($query);
		
		
			// process the results placing them in an array of students
			$mediaArray = array();
			while($row = $result->fetch()) {
				$media=new blog($row['id'], $row['title'], $row['author'], $row['body'], $row['date']);
				$mediaArray[]=$media;
			}
		
		
		$this->disconnect();
        return $mediaArray;
		}
		
		public function insertBlog($blog){
			// setup a prepared statement to insert a new student into the
			// university database
			$query = "insert into media (0, title, body, 0, 0, 0, 0000-00-00)";
			$query .= "values(?,?,?,?,?);";
			$values = array($blog->getID(), getTitle(), $blog->getBody());
			
			// connect to the database and execute the query.	
			$this->connect();
			$result = $this->doNonQuery($query,TRUE,$values);
			if($result != 1) {
				$returnVal = false;
			}
			else {
				$returnVal = true;
			}
			
			// disconnect
			$this->disconnect();
			
			return $returnVal;
		}
	
	}

?>