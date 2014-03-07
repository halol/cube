<?php
	$name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: '.$email; 
    $to = 'contact@themepalette.net'; 		/* Change the recipients email here. 
											This needs to be changed to make the contact form submit 
											to your email address.*/
											
    $subject = 'Contact Form Submission';			/* Subject of email */
			
    $body = "From: $name\nE-Mail: $email\nMessage:\n $message";
							 
        if (mail ($to, $subject, $body, $from)) {			/* mail sending code  */
	    echo '<p>Your message has been sent!</p>';			/* mail sent message  */
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 			/* mail unsent message   */
	} 

?>