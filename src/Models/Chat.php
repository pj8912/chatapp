<?php

namespace ChatApp\Models;

class Chat{

	private $conn;
	public function __construct($db){ $this->conn = $db;}

	public $message,  $sender_id, $receiver_id, $receiver_name;

	private $table = "messages";

	public function uploadMessage(){

		$sql = "INSERT INTO {$this->table}(message, sender_id, receiver_id, receiver_name) VALUES(:message, :sender_id, :receiver_id, :receiver_name)";
		$stmt = $this->conn->prepare($sql);
		$stmt-bindParam(':message,', $this->message,);
		$stmt-bindParam(':sender_id,', $this->sender_id,);
		$stmt-bindParam(':receiver_id,', $this->receiver_id,);
		$stmt-bindParam(':receiver_name', $this->receiver_name);
		if($stmt->execute()){
			return true;
		}
		return false;
	}


	public function fetchMessages(){

		$sql = "SELECT * FROM  {$this->table} where sender_id = :sender_id  AND receiver_id = :receiver_id OR sender_id = :receiver_id and receiver_id = :sender_id";
		$stmt = $this->conn->prepare($sql);
		$stmt->bindParam(':sender_id', $this->sender_id);
		$stmt->bindParam(':receiver_id', $this->receiver_id);
		if($stmt->execute()){
			return $stmt;
		}

		return false;
	}


}
