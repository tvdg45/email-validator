<?php
	//Author: Timothy van der Graaff
	
	//This constant is for PHP class files.
	define('TIMOTHYS_DIGITAL_SOLUTIONS_COMPONENT_FILE_PATH', $_SERVER['DOCUMENT_ROOT']);

// Include library file
require_once TIMOTHYS_DIGITAL_SOLUTIONS_COMPONENT_FILE_PATH . '/utilities/VerifyEmail.php';

// Initialize library class
$mail = new VerifyEmail();

// Set the timeout value on stream
$mail->setStreamTimeoutWait(0);

// Set debug output mode
$mail->Debug = true; 
$mail->Debugoutput= 'html'; 

// Set email address for SMTP request
$mail->setEmailFrom('info@ruff-ruff.com');

// Email to check
$email = '2175086775@txt.att.net'; 

// Check if email is valid and exist
if($mail->check($email)){ 
    echo 'Email &lt;'.$email.'&gt; is exist!'; 
}elseif(verifyEmail::validate($email)){ 
    echo 'Email &lt;'.$email.'&gt; is valid, but not exist!'; 
}else{ 
    echo 'Email &lt;'.$email.'&gt; is not valid and not exist!'; 
}

/*clearstatcache();

// Email to check
try {
$email = '2175086775@vtext.com'; 

// Check if email is valid and exist
if($mail->check($email)){ 
    echo 'Email &lt;'.$email.'&gt; is exist!'; 
}elseif(verifyEmail::validate($email)){ 
    echo 'Email &lt;'.$email.'&gt; is valid, but not exist!'; 
}else{ 
    echo 'Email &lt;'.$email.'&gt; is not valid and not exist!'; 
}
} catch (Exception $e) {
	
	echo "fail";
}

clearstatcache();

try {
// Email to check
$email = '2175086775@txt.att.net'; 

// Check if email is valid and exist
if($mail->check($email)){ 
    echo 'Email &lt;'.$email.'&gt; is exist!'; 
}elseif(verifyEmail::validate($email)){ 
    echo 'Email &lt;'.$email.'&gt; is valid, but not exist!'; 
}else{ 
    echo 'Email &lt;'.$email.'&gt; is not valid and not exist!'; 
}
} catch (Exception $e) {
	
	echo "fail";
}

clearstatcache();

try {
// Email to check
$email = '2175086775@mms.att.net'; 

// Check if email is valid and exist
if($mail->check($email)){ 
    echo 'Email &lt;'.$email.'&gt; is exist!'; 
}elseif(verifyEmail::validate($email)){ 
    echo 'Email &lt;'.$email.'&gt; is valid, but not exist!'; 
}else{ 
    echo 'Email &lt;'.$email.'&gt; is not valid and not exist!'; 
}
} catch (Exception $e) {
	
	echo "fail";
}

clearstatcache();*/

?>
