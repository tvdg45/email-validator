<?php
	//Author: Timothy van der Graaff
	
	//This constant is for PHP class files.
	define('TIMOTHYS_DIGITAL_SOLUTIONS_COMPONENT_FILE_PATH', $_SERVER['DOCUMENT_ROOT']);

// Include library file
require_once TIMOTHYS_DIGITAL_SOLUTIONS_COMPONENT_FILE_PATH . '/utilities/VerifyEmail.php';

// Initialize library class
$mail = new VerifyEmail();

// Set the timeout value on stream
$mail->setStreamTimeoutWait(200000);

// Set debug output mode
$mail->Debug = true; 
$mail->Debugoutput= 'html'; 

// Set email address for SMTP request
$mail->setEmailFrom('info@ruff-ruff.com');

// Email to check
$email = '8888888888@att.txt.net'; 

// Check if email is valid and exist
/*if($mail->check($email)){ 
    echo 'Email &lt;'.$email.'&gt; is exist!'; 
}elseif(verifyEmail::validate($email)){ 
    echo 'Email &lt;'.$email.'&gt; is valid, but not exist!'; 
}else{ 
    echo 'Email &lt;'.$email.'&gt; is not valid and not exist!'; 
}*/

// Email to check
//$email = '2175086775@tmomail.net'; 

// Check if email is valid and exist
if($mail->check($email)){ 
    echo 'Email &lt;'.$email.'&gt; is exist!'; 
}elseif(verifyEmail::validate($email)){ 
    echo 'Email &lt;'.$email.'&gt; is valid, but not exist!'; 
}else{ 
    echo 'Email &lt;'.$email.'&gt; is not valid and not exist!'; 
} 

?>
