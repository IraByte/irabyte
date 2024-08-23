<?php 
include_once 'config/Database.php';
include_once 'class/Subscription.php';

$database = new Database();
$db = $database->getConnection();

$subscriber = new Subscription($db);

if(isset($_POST['email_subscribe'])){ 
    $errorMsg = '';     
    $response = array( 
        'status' => 'err', 
        'msg' => 'Something went wrong, please try after some time.' 
    );     
    
    if(empty($_POST['name'])){ 
        $pre = !empty($msg)?'<br/>':''; 
        $errorMsg .= $pre.'Please enter your full name.'; 
    } 
	
    if(empty($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){ 
        $pre = !empty($msg)?'<br/>':''; 
        $errorMsg .= $pre.'Valid email Required!'; 
    } 
         
    if(empty($errorMsg)){ 
        $name = $_POST['name']; 
        $email = $_POST['email']; 
        $token = md5(uniqid(mt_rand()));  
               
		$subscriber->email = $email;
        if($subscriber->getSusbscriber()){ 
            $response['msg'] = 'Email already exists'; 
        } else {      
			
			$subscriber->name = $name;
			$subscriber->verify_token = $token;
			$insert = $subscriber->insert(); 
             
            if($insert){ 
			
     
                $message = 'Thanks for subscribing.'; 
                $response['msg'] ='Thanks for subscribing.'; 
            
                 
               
            } 
        } 
    } else { 
        $response['msg'] = $errorMsg; 
    }       
    echo json_encode($response); 
} 
?>
