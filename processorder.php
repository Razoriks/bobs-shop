<?php $pageTitle = "Bob's Auto Parts - Order Results"; ?>
<?php include('includes/head.inc'); ?>
<div class="container">
	<div class="page-header">
		<h1>Order Results</h1>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php
				$totalqty = 0;
				$totalamount = 0.00;
				$taxrate = 0.10;
				define("TIREPRICE", 100);
				define("OILPRICE", 10);
				define("SPARKPRICE", 4);
				$tireqty = $_POST["tireqty"];
				$oilqty = $_POST["oilqty"];
				$sparkqty = $_POST["sparkqty"];
				$address = $_POST["address"];

				$totalqty = $tireqty + $oilqty + $sparkqty;
				$totalamount = $tireqty*TIREPRICE + $oilqty*OILPRICE + $sparkqty*SPARKPRICE;
			?>
			<?php if ($totalqty == 0): ?>
				<div class="alert alert-danger" role="alert">
					You did not order anything on the previous page!
				</div>
			<?php else: ?>
			<div class="alert alert-success" role="alert">
				Order processed at <?php echo date("H:i jS F");?>
			</div>
			<p>
				Your order is as follows:<br>
				<?php if($tireqty != 0) echo $tireqty." tires<br>";?>
				<?php if($oilqty != 0) echo $oilqty." bottles of oil<br>";?>
				<?php if($sparkqty != 0) echo $sparkqty." spark plugs<br>";?>
			</p>
			<p>
				Items ordered: <?php echo $totalqty;?><br>
				Subtotal: $<?php echo number_format($totalamount, 2);?><br>
				<?php $totalamount = $totalamount*(1+$taxrate);?>
				<?php $totalamount = number_format($totalamount, 2);?>
				Total including tax: $<?php echo $totalamount;?><br>
			</p>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php 
	
	$fp = fopen("orders/orders.txt", "a");
	$out = date("H:i jS F")."\t".
			$tireqty." tires \t".
			$oilqty." oil \t".
			$sparkqty." spark plugs\t\$".
			$totalamount."\t".
			$address."\n";

	fwrite($fp, $out);
	fclose($fp);

?>
<?php include('includes/foot.inc'); ?>