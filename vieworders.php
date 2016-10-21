<?php 
	
	$pageTitle = "Bob's Auto Parts - View Orders"; 

	$error = "";

	$fp = fopen("orders/orders.txt", "r");
	if (!$fp) {
		$error = "<strong>No orders pending!</strong> Please try again later.";
	}else{
		$orders = array();
		while(!feof($fp))
			$orders[] = fgetcsv($fp, 100, "\t");
	}
	fclose($fp);

?>

<?php include('includes/head.inc'); ?>
<div class="container">
	<div class="page-header">
		<h1>Orders</h1>
	</div>
</div>
<div class="container">
	<div class="row">
		<?php if($error != ""):?>
			<div class="col-md-12">
				<div class="alert alert-danger" role="alert">
					<?php echo $error;?>
				</div>
			</div>
		<?php else:?>
			<div class="col-md-12">
				<table class="table table-condensed">
					<thead>
						<tr>
							<th>Datetime</th>
							<th>Products</th>
							<th>Total</th>
							<th>Adress</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($orders as $order):?>
							<tr>
								<td><?php echo $order[0];?></td>
								<td><?php echo $order[1].$order[2].$order[3];?></td>
								<td><?php echo $order[4];?></td>
								<td><?php echo $order[5];?></td>
							</tr>
						<?php endforeach;?>
					</tbody>
				</table>
			</div>
		<?php endif;?>
	</div>
</div>

<?php include('includes/foot.inc'); ?>