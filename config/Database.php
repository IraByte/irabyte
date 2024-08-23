<?php
session_start();
class Database{
	
	private $host  = '127.0.0.1';
    private $user  = 'anamika';
    private $password   = "ana1234";
    private $database  = "irabyte"; 
    
    public function getConnection(){		
		$conn = new mysqli($this->host, $this->user, $this->password, $this->database);
		if($conn->connect_error){
			die("Error failed to connect to MySQL: " . $conn->connect_error);
		} else {
			return $conn;
		}
    }
}
?>