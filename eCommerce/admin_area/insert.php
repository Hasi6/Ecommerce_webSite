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
			<form class="contact100-form validate-form" method="POST" action="insert.php" enctype="multipart/form-data">
				<span class="contact100-form-title">
					Insert Products
				</span>




				<div class="wrap-input100 validate-input">
					<label class="label-input100" for="file">Upload Image</label>

					<input class="input-file" type="file" name="slide_image" id="file" required />

					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<label class="label-input100" for="message">Product Description</label>
					<textarea id="message" class="input100" name="image_desc" placeholder="Type Product Description..." rows="15"></textarea>
					<span class="focus-input100"></span>
				</div>


				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name="insert_image">
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

  if(isset($_POST['insert_image'])){

    // getting data from fields and store in variables to add to the database
    $image_desc = $_POST['image_desc'];

    //getting image form field and store in variable to add to the SQLiteDatabase
    $slide_image = $_FILES['slide_image']['name'];
    $slide_image_tmp = $_FILES['slide_image']['tmp_name'];

		move_uploaded_file($slide_image_tmp, "slideshow_image/$slide_image");

    $insert_image = "INSERT INTO slideshows (image_desc,slide_image)
    VALUES ('$image_desc','$slide_image')";

		$insert_img = mysqli_query($con, $insert_image);

		if ($insert_img) {
			echo "<script> alert('Images Has Been Inserted! ')</script>";
			echo "<script>window.open('insert.php','_self')</script>";
		}








  }





 ?>
