<?php

include_once 'BaseDB.php';

class Tool{
	
	private $_id;        		// Tool ID
	private $_name; 			// Tool name
	private $_description;		// Tool description
	private $_author;        	// Tool author
	private $_datecreation;     // Tool creation date
  
	private $baseDB;
	// constructor
	function __construct() {
        $this->baseDB = new BaseDB();
    }
	
	// Getters
	public function getId(){
		return $this->_id;
	}
	
	public function getName(){
		return $this->_name;
	}
  
	public function getDescription(){
		return $this->_description;
	}
	
	public function getAuthor(){
		return $this->_author;
	}
		
	public function getDatecreation(){
		return $this->_datecreation;
	}
		
	// Setters
	public function setId($id){
		$this->_id = $id;
	}

	public function setName($name){
		$this->_name = $name;
	}
  
	public function setDescription($description){
		$this->_description = $description;
	}
	
	public function setAuthor($author){
		$this->_author = $author;
	}
	
	public function setDatecreation($datecreation){
		$this->_datecreation = $datecreation;
	}
	
	// functions
	public function add(){ // Log user in
		$this->baseDB->addTool($this->_name, $this->_description, $this->_author);
	}
	
	public function delTool(){ // Log user out
		
	}
	
	public function modifTool($name, $description, $author){ // Get user's tools list
		
	}
	
	public function getToolsByAuthor($author){
		return $this->baseDB->getToolsByAuthor($author);
	}
	
	public function getTools(){
		return $this->baseDB->getTools();
	}
}