<?php $pageTitle = "Bob's Auto Parts - Order Form"; ?>
<?php include('includes/head.inc'); ?>

<div class="container">
	<div class="page-header">
		<h1>Order Form</h1>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<form action="processorder.php" method="post">
				<div class="form-group">
					<label for="tireqty">Tires</label>
					<input type="text" class="form-control" name="tireqty" id="tireqty" size="3" maxlength="3">
				</div>
				<div class="form-group">
					<label for="oilqty">Oil</label>
					<input type="text" class="form-control" name="oilqty" id="oilqty" size="3" maxlength="3">
				</div>
				<div class="form-group">
					<label for="sparkqty">Spark Plugs</label>
					<input type="text" class="form-control" name="sparkqty" id="sparkqty" size="3" maxlength="3">
				</div>
				<div class="form-group">
					<label for="sparkqty">Address</label>
					<input type="text" class="form-control" name="address" id="address">
				</div>
				<div class="form-group">
					<label for="find">Spark Plugs</label>
					<select class="form-control" name="find" id="find">
						<option value="a">I'm a regular customer</option>
						<option value="b">TV advertising</option>
						<option value="c">Phone directory</option>
						<option value="d">Word of mouth</option>
					</select>
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>
</div>

<?php include('includes/foot.inc'); ?>