<?php
  include("../functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Insert Products</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Insert Products</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="insert_product.php" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="name">Product Title</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="product_title">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Product Category</div>
                            <div class="value">
                              <select class="select-css" name="product_cat">
                                  <option>Select Category</option>
                                  <!-- calling addCategories function to display the already exsits categories -->
                                  <?php
                                    addCategories();
                                   ?>
                              </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Product Brand</div>
                            <div class="value">
                              <select class="select-css" name="product_brand">
                                  <option>Select Brand</option>

                                  <!-- calling addBrands function to display the already exsits brands -->
                                  <?php
                                    addBrands();
                                   ?>
                              </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Upload Product Image</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="product_image" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Upload a Product Image</div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Product Price</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="product_price">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Product Description</div>
                            <div class="value">
                                <textarea class="input--style-6" type="text" name="product_desc" rows="6"></textarea>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Product Keyword</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="product_keywords">
                            </div>
                        </div>
                    </form>
                </div>

                    <input type="submit" class="btn btn--radius-2 btn--blue-2" name="insert_post" value="Insert Product">
                    <input type="ubmit" name="insert_post" value="Insert Product">

            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

<!-- js for textarea -->
<script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script>

</html>
<!-- end document-->


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

    $insert_product = "INSERT INTO products (product_cat,product_brand,product_title,product_price,product_desc,product_image,product_keywords)
    values ('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";








  }





 ?>
