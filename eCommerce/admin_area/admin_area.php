<?php
  session_start();
  include("header.php");
  include('../includes/db.php');
?>


<!-- Bootstrap -->
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="admin.css">
<link rel="stylesheet" href="../css/style_reg.css">

<!-- Link Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">

    <!-- link font awesome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            <div class="row">
                <div class="col-md-4">

                    <div class="profile-img">
                      <h2>Admin Page</h2><hr>

                        <img src="customer_images/<?php echo $c_image; ?>" alt=""/><br>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                                <!-- <h2>
                                    <?php echo $c_name; ?>
                                </h2>
                                <h3>
                                    <?php echo $user; ?>
                                </h3> -->

                    </div>
                </div>
                <div class="col-md-2">
                </div>
            </div>

            <div class="row" id="left_box">
                <div class="col-md-4"><br>
                    <div class="profile-work">
                        <a href="admin_area.php?insert_new_products">Insert New Products</a><br/>
                        <hr>
                        <a href="admin_area.php?view_all_products">View All Products</a><br/>
                        <hr>
                        <a href="admin_area.php?insert_new_categories">Insert New Category</a><br>
                        <hr>
                        <a href="admin_area.php?view_all_categories">View All Categories</a><br>
                        <hr>
                        <a href="admin_area.php?insert_new_brands">Insert New Brand</a><br>
                        <hr>
                        <a href="admin_area.php?view_all_brands">View All Brands</a><br>
                        <hr>
                        <a href="admin_area.php?view_all_customers">View All Customers</a><br>
                        <hr>
                        <a href="admin_area.php?insert_slide_show_images">Add New Image to Slide Show</a><br>
                        <hr>

                    </div>
                </div>
            </div>

            <div class="" id="right_box">
              <?php

              if(!isset($_GET['insert_new_products'])){
                if(!isset($_GET['view_all_products'])){
                  if(!isset($_GET['insert_new_categories'])){
                    if(!isset($_GET['view_all_categories'])){
                      if(!isset($_GET['insert_new_brands'])){
                        if(!isset($_GET['view_all_brands'])){
                          if(!isset($_GET['view_all_customers'])){
                            if(!isset($_GET['insert_slide_show_images'])){

                                echo "<h1> Welcome To Admin Area </h1>'";

                            }
                          }
                        }
                      }
                    }
                  }
                }
              }

               ?>

               <div class="" id="right_box">
                 <?php

                 if(isset($_GET['insert_new_products'])){
                   echo "<script>window.open('insert_product.php','_self')</script>";
                 }
                 if(isset($_GET['view_all_products'])){
                   echo "<script>window.open('view_product.php','_self')</script>";
                 }
                 if(isset($_GET['insert_new_categories'])){
                   echo "<script>window.open('insert_category.php','_self')</script>";
                 }
                 if(isset($_GET['view_all_categories'])){
                   echo "<script>window.open('view_categories.php','_self')</script>";
                 }
                 if(isset($_GET['insert_new_brands'])){
                   echo "<script>window.open('insert_brand.php','_self')</script>";
                 }
                 if(isset($_GET['view_all_brands'])){
                   echo "<script>window.open('view_brands.php','_self')</script>";
                 }
                 if(isset($_GET['insert_slide_show_images'])){
                   echo "<script>window.open('insert.php','_self')</script>";
                 }

                  ?>
              </div>

            </div>


    </div>








</body>
</html>
