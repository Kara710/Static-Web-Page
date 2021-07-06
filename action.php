 <?php

#VERIFY reCAPTCHA
if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
    $secret = '6LeGankbAAAAAJ3dqjXpWbubSG9x5kqxaIQdYxOg';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
    if($responseData->success) {
      //contact form submission code
      $resultmsg = "<b>Thank you. Your message has been sent.</b>";
	
    } else { // verification failed
		$resultmsg = '<b>reCAPTCHA verification failed, please try again.</b>';
		echo "<script>
				 alert('Are you a robot?'); 
				 window.history.go(-1);
			</script>";
		exit();
    }
} else { // 'g-recaptcha-response' empty or not set
    $resultmsg = '<b>Please go back and click on the reCAPTCHA box.</b>';
		echo "<script>
            alert('Are you a robot?'); 
            window.history.go(-1);
			</script>";
		exit();
}
#Pass values from EMAIL
$to       = 'karachatzi.maria@gmail.com';
$subject  = 'WebSitePlanet';
$message  = $_POST['data'];
$headers = 'From: '.$_POST['data'];
if(mail($to, $subject, $message, $headers)){
    echo "Email sent";
	echo "<script>
            alert('Your email sent sucessfully'); 
            window.history.go(-1);
		</script>";
}
else{
    echo "Email sending failed";
}

?>
 