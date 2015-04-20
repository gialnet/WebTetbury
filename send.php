<?php 
if(isset($_POST['Send']) || isset($_POST['ajax'])){
	
		$errorC = false;
	
		$the_name = $_POST['yourname'];
		$the_email = $_POST['email'];
		$the_website = $_POST['website'];
		$the_message = $_POST['message'];
		$the_url = $_POST['imageURL'];
		$the_subject = $_POST['Subject'];
		
		# want to add aditional fields? just add them to the form in template_contact.php,
		# you dont have to edit this file
		
		//added fields that are not set explicit like the once above are combined and added before the actual message
		$already_used = array('yourname','email','website','message','ajax','myemail','myblogname','Send','Subject','imageURL');
		$attach = '';
		
		foreach ($_POST as $key => $field)
		{
			if(!in_array($key,$already_used))
			{
				$attach.= $key.": ".$field."<br /> \n";
			}
		}
		$attach.= "<br /> \n";
		
		
		if(!checkmymail($the_email))
		{
			$errorC = true;
			$the_emailclass = "error";
		}else{
			$the_emailclass = "valid";
		}
		
		if($the_name == "")
		{
			$errorC = true;
			$the_nameclass = "error";
		}else{
			$the_nameclass = "valid";
		}
		
		if($the_message == "")
		{
			$errorC = true;
			$the_messageclass = "error";
		}else{
			$the_messageclass = "valid";
		}
		
		
		
		if($the_subject != '') $the_subject = 'Subject: '.$the_subject."<br/>";
		if($the_url != '') $the_url = 'Preview Image: '.$the_url."<br/>";
		
		if($errorC == false)
		{	
			$to      =  $_POST['myemail'];
			$subject = "New Message from " . $_POST['myblogname'];
			$header  = 'MIME-Version: 1.0' . "\r\n";
			$header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			$header .= 'From:'. $_POST['email']  . " \r\n";
		
			$message1 = nl2br($_POST['message']);
			
			
			$message = "New message from  $the_name <br/>
			Mail: $the_email<br />
			Website: $the_website <br />
			$the_subject
			$the_url
			$attach <br />
			Message: $message1 <br />";
			
		
			
			mail($to,
			$subject,
			$message,
			$header); 
                        
                        
require_once('php/PHPMailer_5.2.4/class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$body             = file_get_contents('contents.html');
$body             = preg_replace('/[\]/','',$body);

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "mail.yourdomain.com"; // SMTP server
$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username   = "mariadelmarpf@gmail.com";  // GMAIL username
$mail->Password   = "004TilinTilin";            // GMAIL password

$mail->SetFrom('mariadelmarpf@gmail.com', 'Web TetburySS');

$mail->AddReplyTo("mariadelmarpf@gmail.com","Web TetburySS");

$mail->Subject    = $subject;

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($message);

$address = "mariadelmarpf@gmail.com";
$mail->AddAddress($address, "John Doe");



if(!$mail->Send()) {
  //echo "Mailer Error: " . $mail->ErrorInfo;
    echo "<h3>Lo sentimos, su email no ha podido ser enviado, puedes ponerte en contacto con nosotros en info@tetburyss.co.uk</h3>";
} 
			
			/*if(isset($_POST['ajax'])){
			echo"<h3>Tu ensaje ha sido enviado, en breve nos pondremos en contacto contigo.</h3><p> Gracias!</p>";
			}*/
		}
		
}
	
	
function checkmymail($mailadresse){
	$email_flag=preg_match("!^\w[\w|\.|\-]+@\w[\w|\.|\-]+\.[a-zA-Z]{2,4}$!",$mailadresse);
	return $email_flag;
}
	




?>