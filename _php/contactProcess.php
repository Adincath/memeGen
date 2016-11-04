<?php 

/* srcing: http://webdesign.tutsplus.com/tutorials/how-to-integrate-no-captcha-recaptcha-in-your-website--cms-23024 */

//Includes
require_once "recaptchalib.php";

$key = "6LenUA8TAAAAANcGjL7Gaj2NEb99P5Vs9t55Plhq";
$toEmail = "broabect@ut.utm.edu";
$emailSubject = "Meme Gen | Contact Form";
$response = null;
$secret = "6LenUA8TAAAAANcGjL7Gaj2NEb99P5Vs9t55Plhq";

// If everything we were expecting has sent
if(isset($_POST['userEmail']) && 
   isset($_POST['userName']) && 
   isset($_POST['userSuggestion']) && 
   isset($_POST['g-recaptcha-response'])
  ){

	// User's information
	$userEmail = $_POST['userEmail'];
	$userName = $_POST['userName'];
	$userSuggestion = $_POST['userSuggestion'];

	//Verifying User
	$reCaptcha = new ReCaptcha($secret);
	$resp = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );

	// If the user has been verified
 	if ($resp != null && $resp->success) {
    	
 		$msg = "";

    	$msg .= "Meme Generator Contact Form Submission From: $userName @ $userEmail.\n\n\n";

    	$msg .= "Suggestion:\n\n $userSuggestion\n\n\n";

    	//Sending Email
 		mail($toEmail, $emailSubject, $msg);

 		$url = "//localhost/broabect/memeGen/_php/contactsuccess.php";
 		//Status Code: Permanent Redirect
 		$statusCode = 301;


		header('Location: ' . $url, true, $statusCode);
   	die();

  	}
}

?>