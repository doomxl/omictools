<?php

	
/**
	POST and GET request handler and session handler
	Author : Fahri DAHMANI
	03/09/2018
*/


	include_once 'include/User.php';
	include_once 'include/Tool.php';
	
	define('SESSION_TIME_OUT',3600); // 30min timeout
	
	session_start();
	
	if(!empty($_POST)){
		if($_POST['source'] == 'inscr'){
			$user = new User();
			if($user->emailExistsInDB($_POST['email'])){
				header('Location: inscription.php?'.http_build_query($_POST));
				exit();
			}
			$user->setName($_POST['name']);
			$user->setLastname($_POST['lastname']);
			$user->setEmail($_POST['email']);
			$user->setDescription($_POST['description']);
			$user->setHash(password_hash($_POST['password'], PASSWORD_BCRYPT));
			
			$_SESSION['userID'] 	= $user->add();
			$_SESSION['time']   	= time();
			$_SESSION['name']   	= $user->getName();
			$_SESSION['lastname'] 	= $user->getLastname();
			$_SESSION['email'] 		= $user->getEmail();
			$_SESSION['description']= $user->getDescription();
			$_SESSION['fullName'] 	= ucfirst(strtolower($user->getName())).' '.strtoupper($user->getLastname());
			header('Location: accueil.php?');
			exit();
		}
		
		if($_POST['source'] == 'auth'){
			$user = new User();
			$user->getUserByEmail($_POST['email']);
			if(password_verify ($_POST['password'], $user->getHash())){
				$_SESSION['userID'] 	= $user->getId();
				$_SESSION['time']   	= time();
				$_SESSION['name']   	= $user->getName();
				$_SESSION['lastname'] 	= $user->getLastname();
				$_SESSION['email'] 		= $user->getEmail();
				$_SESSION['description']= $user->getDescription();
				$_SESSION['fullName'] 	= ucfirst(strtolower($user->getName())).' '.strtoupper($user->getLastname());
			}else{
				header('Location: index.php?'.http_build_query($_POST));
				exit();
			}
		}
		
		if($_POST['source'] == 'addTool'){
			$tool = new Tool();
			$tool->setName($_POST['name']);
			$tool->setDescription($_POST['description']);
			$tool->setAuthor($_SESSION['userID']);
			$tool->add();
			header('Location: profil.php?');
			exit();
		}
	}
	
	if(!(isset($_SESSION['userID']) && (time()-$_SESSION['time']) < SESSION_TIME_OUT)) {
		session_destroy();
		header('Location: index.php');
	}
	
	if( isset($_GET['action']) && $_GET['action'] == 'signout') {
		session_destroy();
		header('Location: index.php');
	}
	
	
	
	