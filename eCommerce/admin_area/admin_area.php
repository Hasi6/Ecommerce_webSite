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

                      <?php

                      $user = $_SESSION['customer_email'];

                      $get_details = "SELECT * FROM customers WHERE customer_email = '$user'";

                      $run_details = mysqli_query($con, $get_details);

                      $row_details = mysqli_fetch_array($run_details);

                      $c_image = $row_details['customer_image'];
                      $c_name = $row_details['customer_name'];
                      $c_pass = $row_details['customer_pass']; // to pass as a parameter to the changePass function

                       ?>

                        <img src="customer_images/<?php echo $c_image; ?>" alt=""/><br>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                                <h2>
                                    <?php echo $c_name; ?>
                                </h2>
                                <h3>
                                    <?php echo $user; ?>
                                </h3>

                    </div>
                </div>
                <div class="col-md-2">
                </div>
            </div>

            <div class="row" id="left_box">
                <div class="col-md-4"><br>
                    <div class="profile-work">
                        <a href="my_account.php?my_orders">My Orders</a><br/>
                        <hr>
                        <a href="my_account.php?edit_account">Edit Account</a><br/>
                        <hr>
                        <a href="my_account.php?change_pass">Change Password</a><br>
                        <hr>
                        <a href="my_account.php?delete_account">Delete Account</a>
                        <hr>

                    </div>
                </div>
            </div>

            <div class="" id="right_box">
              <?php

              if(!isset($_GET['my_orders'])){
                if(!isset($_GET['edit_account'])){
                  if(!isset($_GET['change_pass'])){
                    if(!isset($_GET['delete_account'])){

                      echo "<h1> Welcome To Admin Area </h1>'";

                    }

                  }

                }

              }

               ?>

               <div class="" id="right_box">
                 <?php

                 if(isset($_GET['edit_account'])){
                   include("edit_account.php");
                 }

                 if(isset($_GET['change_pass'])){
                   include("change_pass.php");
                 }

                 if(isset($_GET['delete_account'])){
                   include("delete_account.php");
                 }

                  ?>
              </div>

            </div>


    </div>








</body>
</html>
