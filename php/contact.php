<?php 
 
$mailTo     = 'info@amani-projekts.co.za';

$successMsg = 'Thank you, mail sent successfuly!';

$fillMsg    = 'Please fill in all fields!';

$errorMsg   = 'Hmmm.. seems like there was a problem, sorry! Please try again.';

?>


    <?php
	$msg = "Name: ".$_POST['c-name']."\r\n";
	$msg .= "Email: ".$_POST['c-email']."\r\n";
	$msg .= "Telephone: ".$_POST['c-phone']."\r\n";
	$msg .= "Subject: ".$_POST['c-message']."\r\n";

    $success = @mail($mailTo, $_POST['c-email'], $msg, 'From: ' . $_POST['c-name'] . '<' . $_POST['c-email'] . '>');
    
    // redirect to successful page 
	if ($success){
	  print "<meta http-equiv=\"refresh\" content=\"0;URL=../message-success.html\">";
	}
	else{
	  print "<meta http-equiv=\"refresh\" content=\"0;URL=../message-failed.html\">";
	}