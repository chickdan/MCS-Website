<?php
	class Image {
   	  private static $imageCount = 0;
	  private $image_id;
	  private $image_name;
	  private $project_id;
	  private $student_id;
	  private $instructor_id;
	  
	  // construct a image object
	  function __construct($image_id, $image_name, $project_id, $student_id, $instructor_id) {  
	  	$this->setImageID($image_id);
		$this->setImageName($image_name;
		$this->setProjectID($project_id);
		$this->setStudentId($student_id);
		$this->setInstructorID($instructor_id);
		self::$imageCount++;	
	  }
	  
	  // setter functions
	  public function setImageID($id) {$this->image_id=$image_id;}
	  public function setImageName($image_name) {$this->image_name=$image_name;}
	  public function setProjectId($project_id) {$this->project_id=$project_id;}
	  public function setStudentId($student_id) {$this->student_id=$student_id;}
	  public function setInstructorID($instructor_id) {$this->instructor_id=$instructor_id;}
	  
	  // getter functions
	  public function getImageID() {return $this->image_id;}
	  public function getImageName() {return $this->image_name;}
	  public function getProjectId() {return $this->project_id;}
	  public function getStudentId() {return $this->student_id;}
	  public function getInstructorID() {return $this->instructor_id;}
	  
	  public static function getImageCount(){return self::$imageCount;}
   }

?>