<?php
	include_once 'dataManager.php';
	include_once dirname(__FILE__).'/../siteModel/blog.class.php';
	
	class blogManager extends DataManager {
	
		function __construct() {
			parent::__construct();
		}
	
		public function getBlogs() {
			$query = 'select * from blog;';
			$this->connect();
			$result = $this->doQuery($query);
		
		
			// process the results placing them in an array of students
			$blogArray = array();
			while($row = $result->fetch()) {
				$blo=new Blog($row['author'], $row['text'], $row['title']); //, $row['date'], $row['blogID'], 
				$blogArray[]=$blo;
			}
		
		$this->disconnect();
        return $blogArray;
		}
		
		public function insertBlog($blo){
			// setup a prepared statement to insert a new student into the
			// university database
			$query = "insert into blog (blog_author, blog_text, blog_title)";
			$query .= "values(?,?,?);";
			$values = array($blo->getAuthor(), $blo->getText(), $blo->getTitle()); //$blog->getDate()
			
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
	
	
		public function deleteBlog($title, $author){
		$query = "DELETE FROM `blog` WHERE `blog`.`blog_title` = ".$title." AND `blog`.`blog_author` = ".$author.";";
		
		$this->connect();
		$result = $this->doNonQuery($query,TRUE,NULL);
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