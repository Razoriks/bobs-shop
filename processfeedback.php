<?php $pageTitle = "Bob's Auto Parts - Feedback Submitted"; ?>
<?php include('includes/head.inc'); ?>

<?php

	$email = trim($_POST['email']);
	$comment = trim($_POST['comment']);
	
	if( !eregi("^[a-zA-Z0-9_]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$", $email)){
		echo "That is not a valid email address. Please return to the previous page and try again.";
		exit();
	}

	$toaddress = "anedod@gmail.com"; //Default value

	if(eregi("shop|customer service|retail", $comment))
		$toaddress = "retail@bobsdomain.com";
	elseif(eregi("deliver.*|fulfil.*", $comment))
		$toaddress = "fulfilment@bobsdomain.com";
	elseif(eregi("bill|account", $comment))
		$toaddress = "accounts@bobsdomain.com"	;

	$subject = "Feedback from Bob's Shop";
	$mailcontent = "Customer name: ".trim($_POST['name'])."\n".
					"Customer email: ".$email."\n".
					"Customer comments: ".$comment;
	$fromaddress = "info@anwes.ru";

	mail($toaddress, $subject, $mailcontent, $fromaddress);

?>

<div class="container">
	<div class="page-header">
		<h1>Feedback Submitted</h1>
		<p>Your feedback has been sent.</p>
	</div>
	<div class="row">
		<div class="col-md-12">
			<p><?php echo nl2br($_POST['comment']);?></p>
		</div>
	</div>
</div>

<?php include('includes/foot.inc'); ?>