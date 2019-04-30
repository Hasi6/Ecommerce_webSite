<?php
  include("../functions/functions.php");
  include('../includes/db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V18</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="POST" action="insert_product.php" enctype="multipart/form-data">
				<span class="contact100-form-title">
					Insert Products
				</span>


				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<label class="label-input100" for="name">Product Title</label>
					<input id="name" class="input100" type="text" name="product_title" placeholder="Enter Product Title..." required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100">
					<div class="label-input100">Product Category</div>
					<div>
						<select class="js-select2" name="product_cat" required>
							<option>Select Category</option>
							<!-- calling addCategories function to display the already exsits categories -->
							<?php
								addCategories();
							 ?>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100">
					<div class="label-input100">Product Brand</div>
					<div>
						<select class="js-select2" name="product_brand" required>
							<option>Select Brand</option>

							<!-- calling addBrands function to display the already exsits brands -->
							<?php
								addBrands();
							 ?>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 validate-input">
					<label class="label-input100" for="file">Upload Image</label>

					<input class="input-file" type="file" name="product_image" id="file" required />

					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<label class="label-input100" for="name">Product Price</label>
					<input id="name" class="input100" type="text" name="product_price" placeholder="Enter Product Price..." required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<label class="label-input100" for="message">Product Description</label>
					<textarea id="message" class="input100" name="product_desc" placeholder="Type Product Description..." rows="15"></textarea>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<label class="label-input100" for="name">Product Keyword</label>
					<input id="name" class="input100" type="text" name="product_keywords" placeholder="Enter Product Keywords..." required>
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name="insert_post">
						Insert Products
					</button>
				</div>

			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-01.jpg');">
			</div>
		</div>
	</div>





<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
		$(".js-select2").each(function(){
			$(this).on('select2:open', function (e){
				$(this).parent().next().addClass('eff-focus-selection');
			});
		});
		$(".js-select2").each(function(){
			$(this).on('select2:close', function (e){
				$(this).parent().next().removeClass('eff-focus-selection');
			});
		});

	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

	<!-- js for textarea -->
	<script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
	<script>tinymce.init({selector:'textarea'});</script>
</body>
</html>


<!-- php code to insert data to database -->
<?php

  if(isset($_POST['insert_post'])){

    // getting data from fields and store in variables to add to the database
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $product_brand = $_POST['product_brand'];
    $product_price = $_POST['product_price'];
    $product_desc = $_POST['product_desc'];
    $product_keywords = $_POST['product_keywords'];

    //getting image form field and store in variable to add to the SQLiteDatabase
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp = $_FILES['product_image']['tmp_name'];

		move_uploaded_file($product_image_tmp, "product_images/$product_image");
      
    $check_product = "SELECT * FROM products WHERE product_title ='$product_title' AND product_brand ='$product_brand' AND product_cat='$product_cat'";

    $run_check = mysqli_query($con, $check_product);
      
    if(mysqli_num_rows($run_check) > 0){
      echo "<script>window.alert('Already in Products Menu')</script>
      <script>window.open('insert_brand.php','_self')</script>"; //donothing
    }
      
    else{
        
    $insert_product = "INSERT INTO products (product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords)
    VALUES ('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";

		$insert_pro = mysqli_query($con, $insert_product);

		if ($insert_pro) {
			echo "<script> alert('Product Has Been Inserted! ')</script>";
			echo "<script>window.open('insert_product.php','_self')</script>";
		}



    }




  }





 ?>
