<?php

namespace ChatApp\Models;

class User{

	private $conn; //db connections

	public $table = "users"; // users table

	public function __construct($db){ 
		$this->conn = $db;
	}

	public $fullname, $email, $uname, $pwd;
	
	public function check_user(){

		$sql = "SELECT * FROM {$this->table} WHERE user_email= :user_email";
		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam(':user_email', $this->email);
		$stmt->execute();
		return $stmt;

	}

	public function getUser(){
		$sql = "SELECT * FROM {$this->table} WHERE user_email = :user_email";
		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam(':user_email', $this->email);
		if($stmt->execute()){
			return $stmt;
		}
		return false;
	}

	public function getUserById(){
		$sql = "SELECT * FROM {$this->table} WHERE user_id = :user_id";
		$stmt = $this->conn->prepare($sql);

		$stmt->bindParam(':user_id', $this->user_id);

		if($stmt->execute()){
			return $stmt;
		}
		return false;
	}

	public function create_user(){

		$sql = "INSERT INTO {$this->table}(user_fullname, user_email, user_uname, user_pwd, created_at) VALUES(:user_fullname, user_email, :user_uname, :user_pwd, NOW())";
		$stmt = $this->conn->prepare($sql);

		$stmt->bindParam(':user_fullname', $this->fullname);
		$stmt->bindParam(':user_email', $this->email);
		$stmt->bindParam(':user_uname', $this->uname);
		$stmt->bindParam(':user_pwd', $this->pwd);
		if($stmt->exeute()){
			return true;
		}
		return false;


	}


	public function update_last_seen($uid){
		$sql = "UPDATE {$this->table} SET last_seen = NOW() where user_id = :user_id";
		$stmt = $this->conn->prepare($sql);

		if($stmt->execute()){
			return true;
		}
		return false;
	}



	


}
