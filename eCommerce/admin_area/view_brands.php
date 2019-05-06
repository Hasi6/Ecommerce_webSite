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
								<th class="column1">Brand Id</th>
								<th class="column2">Title</th>
								<th class="column3">Edit</th>
								<th class="column4">Delete</th>
							</tr>
						</thead>
						<?php

            $get_brands = "SELECT * FROM brands";

            $run_brands = mysqli_query($con, $get_brands);


            while($row_brands=mysqli_fetch_array($run_brands)){

              $brands_title = $row_brands['brand_title'];
              $brands_id = $row_brands['brand_id'];

?>
              <tbody>
                  <tr>
                    <td class='column1'><?php echo $brands_id;?> </td>
                    <td class='column2'><?php echo $brands_title;?> </td>
                    <td class='column3'><a href='edit_brands.php?edit_brand=<?php echo $brands_id;?>'>Edit</a> </td>
                    <td class='column4'><a href='delete_brands.php?delete_brand=<?php echo $brands_id;?>'>Delete</a> </td>
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
