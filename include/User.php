<?php


/**
	User Class, functions and tools, geters and setters
	Author : Fahri DAHMANI
	03/09/2018
*/


include_once 'BaseDB.php';

class User{
	
	private $_id;        		// User ID
	private $_name; 			// User name
	private $_lastname;   		// User lastname
	private $_description;		// User description
	private $_email;        	// User email
	private $_hash;   			// Hash 
	
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
	
	public function getLastname(){
		return $this->_lastname;
	}
  
	public function getDescription(){
		return $this->_description;
	}
	
	public function getEmail(){
		return $this->_email;
	}
	
	public function getHash(){
		return $this->_hash;
	}
	
	// Setters
	public function setId($id){
		$this->_id = $id;
	}
	
	public function setName($name){
		$this->_name = $name;
	}
	
	public function setLastname($lastname){
		$this->_lastname = $lastname;
	}
  
	public function setDescription($description){
		$this->_description = $description;
	}
	
	public function setEmail($email){
		$this->_email = $email;
	}
	
	public function setHash($hash){
		$this->_hash = $hash;
	}
	
	// functions
	
	/* add new user */
	public function add(){ 
		$this->baseDB->addUser($this->_name, $this->_lastname, $this->_description, $this->_email, $this->_hash);
		return $this->baseDB->getLastInsertID();
	}
	
	/* get user by ID */
	public function getUser($id){
		$userArr = $this->baseDB->getUserById($id);
		$this->_id			= $userArr['id'];
		$this->_name 		= $userArr['name'];
		$this->_lastname 	= $userArr['lastname'];
		$this->_description = $userArr['description'];
		$this->_email		= $userArr['email'];
		$this->_hash		= $userArr['hash'];
	}
	
	/* get users full name */
	public function getUserFullName($id){
		$userArr = $this->baseDB->getUserById($id);
		return ucfirst(strtolower($userArr['name'])).' '.strtoupper($userArr['lastname']);
	}
	
	/* get user by email */
	public function getUserByEmail($email){
		$userArr = $this->baseDB->getUserByEmail($email);
		$this->_id			= $userArr['id'];
		$this->_name 		= $userArr['name'];
		$this->_lastname 	= $userArr['lastname'];
		$this->_description = $userArr['description'];
		$this->_email		= $userArr['email'];
		$this->_hash		= $userArr['hash'];
	}
	
	/* check if email existe in th db */
	public function emailExistsInDB($email){
		return $this->baseDB->emailExists($email);
	}
}