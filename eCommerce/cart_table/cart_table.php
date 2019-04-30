<?php
	// include('../ecommerce.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main2.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
				<form class="" action="" method="post" enctype="multipart/form-data">


					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1" colspan="6"><h2 class="text-center">Update your Cart or Checkout</h2></th>
							</tr>
						</thead>
						<thead>
							<tr class="table100-head">
								<th class="column1">Remove</th>
								<th class="column2">Product Id</th>
								<th class="column3">Product(s)</th>
								<th class="column4">Price</th>
								<th class="column5">Quantity</th>
								<th class="column6">Total Price</th>
							</tr>
						</thead>
						<tbody>
								<tr>
									<!-- <?php

									$total_price = 0;

									global $con;

									$ip = getIp();

									$sel_price = "SELECT * from cart WHERE ip_add='$ip'";

									$run_price = mysqli_query($con, $sel_price);

									while($p_price = mysqli_fetch_array($run_price)){

										$pro_id = $p_price['p_id'];

										$pro_price = "SELECT * from products WHERE product_id ='$pro_id'";

										$run_pro_price = mysqli_query($con, $pro_price);

										while ($pp_price = mysqli_fetch_array($run_pro_price)) {

											$product_price = array($pp_price['product_price']);

											$product_title = $pp_price['product_title'];

											$product_image = $pp_price['product_image'];

											$single_price = $pp_price['product_price'];

											$product_id = $pp_price['product_id'];

											$values = array_sum($product_price);

											$total_price += $values;

										}

									}

									echo $total_price;


									 ?> -->
								</tr>
						</tbody>
					</table>
				</form>
				</div>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
