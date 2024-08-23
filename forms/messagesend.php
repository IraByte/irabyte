<?php
class Subscription {	
   
	private $subscribeTable = 'irabytemessage';	
	private $conn;
	
	public function __construct($db){
        $this->conn = $db;
    }	    
	
	public function insert(){
		
		if($this->irabytename && $this->irabyteemail && $this->irabytesubject && $this->message) {

			$stmt = $this->conn->prepare("
			INSERT INTO ".$this->subscribeTable."(`irabyteid`,`irabytename`, `irabyteemail`, `irabytesubject`,`message` )
			VALUES(?,?,?,?)");
		
			$this->irabyteid = htmlspecialchars(strip_tags($this->irabyteid));
			$this->irabytename = htmlspecialchars(strip_tags($this->irabytename));
			$this->irabyteemail = htmlspecialchars(strip_tags($this->irabyteemail));
			$this->irabytesubject = htmlspecialchars(strip_tags($this->irabytesubject));					
			$this->message = htmlspecialchars(strip_tags($this->message));		
			
			$stmt->bind_param("sss",$this->irabytename, $this->irabyteemail, $this->irabytesubject,$this->message);
			
			if($stmt->execute()){
				return true;
			}		
		}
	}
	
	
	

}
?>