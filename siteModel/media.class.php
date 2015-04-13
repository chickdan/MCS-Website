<?php
	class Media {
   	  private static $mediaCount = 0;
	  private $id;
	  private $title;
	  private $student_first_name;
	  private $student_last_name;
	  private $professor_title;
	  private $professor_last_name;
	  private $body;
	  private $date;
	  
	  
	  // construct a media object
	  function __construct($title, $body) {  
	  	//$this->setID($id);
		$this->setTitle($title);
		//$this->setAuthor($author);
		//$this->setDate($date);
		$this->setBody($body);
		//$this->setStuFName($student_first_name);
		//$this->setStuLName($student_last_name);
		//$this->setStuProfTitle($professor_title);
		//$this->setStuProfLname($professor_last_name);
		self::$mediaCount++;	
	  }
	  
	  // setter functions
	  public function setID($id) {$this->id=$id;}
	  public function setTitle($title) {$this->title=$title;}
	  public function setAuthor($author) {$this->author=$author;}
	  public function setDate($date) {$this->date=$date;}
	  public function setBody($body) {$this->body=$body;}
	  
	  // getter functions
	  public function getID() {return $this->id;}
	  public function getTitle() {return $this->title;}
	  public function getAuthor() {return $this->author;}
	  public function getDate() {return $this->date;}
	  public function getBody() {return $this->body;}
	  
	  public static function getBlogCount(){return self::$mediaCount;}
   }
?>