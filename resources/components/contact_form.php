<?php

	if (isset($_POST['submit'])) {

		$name = $_POST['name'];
		$email = $_POST['email'];
		$body = $_POST['message'];
		$human = intval($_POST['human']);

		$to = 'erica.nicole.andrew@gmail.com';
		$subject = 'Message from '.$name;
        
		$message = 'Email: '.$email.'\n Message:\n '.$body;
        $message = wordwrap($message, 70);

        $headers =  'From: webmaster@clandrew.com' . "\r\n" .
                    'Reply-To: webmaster@clandrew.com' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
        
		if (!$_POST['name']) {
			$errName = 'Please enter your name (or *a* name...doesn\'t have to be yours)';
		}

		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email so I can get back to you';
		}

		if (!$_POST['message']) {
			$errMessage = 'There\'s no message in your message...';
		}

		if ($human !== 13) {
			$errHuman = 'You may be a synthetic life form, please seek testing';
		}

		if (!isset($errName) && !isset($errEmail) && !isset($errMessage) && !isset($errHuman)) {
			if (mail ($to, $subject, $message, $headers)) {
				$result = '<div class="alert alert-success">Thank you, your message was sent</div>';
			} else {
                $result = '<div class="alert alert-danger">Sorry, there was an error, please try again</div>';
                $errorMessage = print_r(error_get_last());
                echo "The mail error was ".$errorMessage;
			}
		}
	}


?>

<div class="form-container container">
    
    <p>Reach out to me about commissions for artwork, design, coding projects, hiring me to be the night manager at your museum of curiosities, if you're experiencing difficulties with my site, if you'd like to cook me dinner, want me to cook <i>you</i> dinner, or if you just desire to chat about your insect preferences.</p>
    
    <img class="img-fluid center-block" src="img/layout/Scarab_Sketch.jpg" alt="green scarab"/>
    
	<form role="form" method="post" action="contact.php">
		<div class="form-group">
            <label for="name" class="control-label">Your name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Diphucephala colaspidoides" value="">
            <?php if (isset($errName)): echo "<p class='text-danger'>$errName</p>"; endif; ?>
		</div>
		<div class="form-group">
			<label for="email" class="control-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="user@domain.com" value="">
            <?php if (isset($errEmail)): echo "<p class='text-danger'>$errEmail</p>"; endif;?>
		</div>
		<div class="form-group">
            <label for="message" class="control-label">Message:</label>
            <textarea class="form-control" rows="8" name="message"></textarea>
            <?php if (isset($errMessage)): echo "<p class='text-danger'>$errMessage</p>"; endif; ?>
		</div>
		<div class="form-group">
			<label for="human" class="control-label">10 + 3 = ?</label>
            <input type="text" class="form-control" id="human" name="human" placeholder="type a human answer here">
            <?php if (isset($errHuman)): echo "<p class='text-danger'>$errHuman</p>"; endif; ?>
		</div>
        <button class="btn center-block" id="submit" name="submit" type="submit" value="Send"><strong>Submit</strong></button>
	</form>

	<?php if (isset($result)): echo "$result"; endif; ?>

</div>