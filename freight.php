<? $pageTitle = "Bob's Auto Parts - Distance Cost"; ?>
<? include('includes/head.inc'); ?>
	<div class="container">
		<div class="page-header">
			<h1>Freight</h1>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<table class="table table-condensed">
					<thead>
						<tr>
							<th>Distance</th>
							<th>Cost</th>
						</tr>
					</thead>
					<tbody>
						<? for($distance = 50; $distance <= 250; $distance += 50):?>
							<tr>
								<td><? echo $distance;?></td>
								<td><? echo $distance / 10;?></td>
							</tr>
						<? endfor;?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

<? include('includes/foot.inc'); ?>