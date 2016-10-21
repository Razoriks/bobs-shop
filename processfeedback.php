<?php $pageTitle = "Bob's Auto Parts - Feedback Submitted"; ?>
<?php include('includes/head.inc'); ?>

<?php
	
	$toaddress = "anedod@gmail.com";
	$subject = "Feedback from Bob's Shop";
	$mailcontent = "Customer name: ".trim($_POST['name'])."\n".
					"Customer email: ".trim($_POST['email'])."\n".
					"Customer comments: ".trim($_POST['comment']);
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