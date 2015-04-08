<?php
	  // This class defines a blog for the mcs redesign
   class Blog {
   	  private static $blogCount = 0;
	  //private $blogID;
	  private $title;
	  private $author;
	  //private $date;
	  private $text;
	  
	  // construct a blog object
	  function __construct($author, $text, $title) { //, $date $id, 
	  	//$this->setID($id);
		$this->setTitle($title);
		$this->setAuthor($author);
		//$this->setDate($date);
		$this->setText($text);
		self::$blogCount++;	
	  }
	  
	  // setter functions
	  //public function setID($id) {$this->blogID=$id;}
	  public function setTitle($title) {$this->title=$title;}
	  public function setAuthor($author) {$this->author=$author;}
	  //public function setDate($date) {$this->date=$date;}
	  public function setText($text) {$this->text=$text;}
	  
	  // getter functions
	  //public function getID() {return $this->blogID;}
	  public function getTitle() {return $this->title;}
	  public function getAuthor() {return $this->author;}
	 // public function getDate() {return $this->blogDate;}
	  public function getText() {return $this->text;}
	  
	  public static function getBlogCount(){return self::$blogCount;}
   }
?>