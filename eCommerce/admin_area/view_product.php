<?php
	include("header.php");
	include('../includes/db.php');
	include('functions/functions.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="imagess/icons/favicon.ico"/>
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fontss/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendors/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendors/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendors/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="csss/util.css">
	<link rel="stylesheet" type="text/css" href="csss/main.css">
<!--===============================================================================================-->
</head>
<body>
<h1 style="text-align:center;">All Products</h1>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100" style="margin: 0 auto">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Product Id</th>
								<th class="column2">Title</th>
								<th class="column3">Image</th>
								<th class="column4">Price</th>
								<th class="column5">Edit</th>
								<th class="column6">Delete</th>
							</tr>
						</thead>
						<?php

            $get_pro = "SELECT * FROM products";

            $run_pro = mysqli_query($con, $get_pro);

            $number = 0;

            while($row_pro=mysqli_fetch_array($run_pro)){

              $pro_title = $row_pro['product_title'];
              $pro_image = $row_pro['product_image'];
              $pro_price = $row_pro['product_price'];
              $pro_id = $row_pro['product_id'];

              $number++;
?>
              <tbody>
                  <tr>
                    <td class='column1'><?php echo $pro_id;?> </td>
                    <td class='column2'><?php echo $pro_title;?> </td>
                    <td class='column3'><img src='product_images/<?php echo $pro_image; ?>' height='60' width='60'> </td>
                    <td class='column4'><?php echo $pro_price;?> </td>
                    <td class='column5'><a href='edit_product.php?edit_pro=<?php echo $pro_id;?>'>Edit</a> </td>
                    <td class='column6'><a href='delete_pro.php?delete_pro=<?php echo $pro_id;?>'>Delete</a> </td>
                  </tr>
              </tbody>
              <?php

            }

           ?>
					</table>
				</div>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendors/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendors/bootstrap/js/popper.js"></script>
	<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendors/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="jss/main.js"></script>

</body>
</html>
