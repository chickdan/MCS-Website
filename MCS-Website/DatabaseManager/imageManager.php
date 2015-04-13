<?php
	include_once 'dataManager.php';
	include_once dirname(__FIlE__).'/../siteModel/image.class.php';
	
	class ImageDataManager extends DataManager {
		
		function __construct(){
			parent::__construct();
		}
		
		/**
			Returns the media all the media stored in the db in the form of an array
		*/
		public function getImages() {
			$query = 'select image_id, image_name, image_blob from picture;';
			$this->connect();
			$result = $this->doQuery($query);
		
		
			// process the results placing them in an array of students
			$imageArray = array();
			while($row = $result->fetch()) {
				$image=new image($row['image_id'], $row['image_name'], $row['image_blob']);
				$imageArray[]=$image;
			}
		
		
		$this->disconnect();
        return $imageArray;
		}
	
	}

?>