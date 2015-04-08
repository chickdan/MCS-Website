<?php
	include_once 'dataManager.php';
	include_once dirname(__FIlE__).'/../siteModel/blog.class.php';
	
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
				$media=new course($row['id'], $row['title'], $row['author'], $row['text'], $row['date']);
				$mediaArray[]=$media;
			}
		
		
		$this->disconnect();
        return $mediaArray;
		}
	
	}

?>