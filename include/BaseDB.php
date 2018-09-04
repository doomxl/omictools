<?php

/**
	DataBase Class, functions and tools
	Author : Fahri DAHMANI
	03/09/2018
*/

class BaseDB {
	/* auth params for database*/
	const HOST = 'localhost';
	const USER = 'root';
	const PASS = '';
	const BASE = 'omicdb';
	
	private $mysqli;		// mysqli obj
	private $lastInsertID;	// last insert id
	
	/* constructor */
	function __construct() {
        
    }
	
	public function connect(){
		$this->mysqli = new mysqli(self::HOST, self::USER, self::PASS, self::BASE);
		
		/* Vérification de la connexion */
		if ($this->mysqli->connect_errno) {
			printf("Échec de la connexion : %s\n", $this->mysqli->connect_error);
			exit();
		}
		
		/* force Mysql à communiquer en utf8 avec PHP */
		if ($this->mysqli->query("SET NAMES 'utf8'") === FALSE) { 
			printf("Echec set names 'utf8'.\n");
		}
	}
	
	/* close the connexion */
	public function close(){
		$this->mysqli->close();
	}
	
	/* get the last insert ID*/
	public function getLastInsertID(){
		return $this->lastInsertID;
	}
	
	/* add a tool in database */
	public function addTool($name, $description, $author){
		$this->connect();
		$query = "insert into tool (name, description, author, datecreation) values ('".addslashes($name)."', '".addslashes($description)."', '".$author."', '".date('Y-m-d H:i:s')."')";
		if ($this->mysqli->query($query) === FALSE) {
			printf("Echec creation outil.\n");
		}
		$this->close();
	}
	
	/* add new user in database */
	public function addUser($name, $lastname, $description, $email, $hash){
		$this->connect();
		$query = "insert into user (name, lastname, description, email, hash) values ('".addslashes($name)."', '".addslashes($lastname)."', '".addslashes($description)."', '".$email."', '".$hash."')";
		if ($this->mysqli->query($query) === FALSE) {
			printf("Echec création utilisateur.\n");
		}
		$this->lastInsertID = $this->mysqli->insert_id;
		$this->close();
	}
	
	/* check if email exists in the table user */
	public function emailExists($email){
		$this->connect();
		$query = "select * from user where email = '$email'";
		
		$result = $this->mysqli->query($query);
		if (!$result) {
		   printf("Errormessage: %s\n", $this->mysqli->error);
		}
		
		if ($result->num_rows > 0) return true;
	}
	
	/* get user by ID */
	public function getUserById($id){
		$this->connect();
		$query = "select * from user where id = $id";
		
		$result = $this->mysqli->query($query);
		
		if (!$result) {
		   printf("Errormessage: %s\n", $this->mysqli->error);
		}
		
		if ($result->num_rows > 0) {
			// output data of each row
			return $result->fetch_assoc();
		} else {
			return array();
		}
		$this->close();
	}
	
	/* get user by email */
	public function getUserByEmail($email){
		$this->connect();
		$query = "select * from user where email = '$email'";
		
		$result = $this->mysqli->query($query);
		
		if (!$result) {
		   printf("Errormessage: %s\n", $this->mysqli->error);
		}
		
		if ($result->num_rows > 0) {
			// output data of each row
			return $result->fetch_assoc();
		} else {
			return array();
		}
		$this->close();
	}
	
	/* get a tool by his author */
	public function getToolsByAuthor($author){
		$this->connect();
		$query = "select * from tool where author = $author";
		
		$result = $this->mysqli->query($query);
		
		if (!$result) {
		   printf("Errormessage: %s\n", $this->mysqli->error);
		}
		
		$tools = array();
		
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$tools[] = $row;
			}
			return $tools;
		} else {
			return array();
		}
		$this->close();
	}
	
	/* get All the tools */
	public function getTools(){
		$this->connect();
		$query = "select t.name, t.description, u.name as prenom, u.lastname, date_format(t.datecreation, '%d-%m-%Y') as datecreation from tool t, user u where t.author = u.id ";
		
		$result = $this->mysqli->query($query);
		
		if (!$result) {
		   printf("Errormessage: %s\n", $this->mysqli->error);
		}
		
		$tools = array();
		
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()){
				$tools[] = $row;
			}
			return $tools;
		} else {
			return array();
		}
		$this->close();
	}
}