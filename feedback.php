<? $pageTitle = "Bob's Auto Parts - Feedback"; ?>
<? include('includes/head.inc'); ?>

<div class="container">
	<div class="page-header">
		<h1>Customer Feedback</h1>
		<p>Please tell us what you think.</p>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<form action="processfeedback.php" method="post">
				<div class="form-group">
					<label for="name">Your name</label>
					<input type="text" class="form-control" name="name" id="name">
				</div>
				<div class="form-group">
					<label for="email">Your email address</label>
					<input type="email" class="form-control" name="email" id="email">
				</div>
				<div class="form-group">
					<label for="comment">Your feedback</label>
					<textarea class="form-control" name="comment" id="comment"></textarea>
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>
</div>

<? include('includes/foot.inc'); ?>