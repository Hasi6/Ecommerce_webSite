<?php
include("functions/functions.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>

    <!-- style -->
    <link rel="stylesheet" href="styles/style.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  </head>
  <body>

    <nav class="nav navbar-expand-md navbar-custom bg-dark navbar-dark sticky-top" id="main-nav">
          <div class="container-fluid">
            <div>
              <button class="navbar-toggler" type="button" data-toggle="collapse"
              data-target="#navbarsExamples09" aria-controls="navbarsExamples09"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navbarsExamples09" style="width: 100%; margin: 0 100px;">
              <ul class="nav navbar-nav">
                <li>
                  <a href="ecommerce.php" class="nav-link">Home</a>
                </li>
                <li>
                  <a href="all_products.php" class="nav-link">All Products</a>
                </li>
                <li>
                  <a href="#who" class="nav-link">My Account</a>
                </li>
                <li>
                  <a href="#contact" class="nav-link">Contact us</a>
                </li>
                <li>
                  <form class="" action="results.php" method="get" enctype="multipart/form-data">
                    <input type="text" name="user_query" value="" id="search" placeholder="Search">
                    <input type="submit" name="search" value="Search" class="btn btn-primary" id="search-btn">
                  </form>
                </li>
                <li>
                  <a href="#who" class="nav-link  nav-right">Sign In</a>
                </li>
                <li>
                  <a href="cart.php" class="nav-link  nav-rightlink">Cart</a>
                </li>
                <li>
                  <?php

                    if(!isset($_SESSION['customer_email'])){
                      echo "<a href='checkout.php'>Loging</a>";
                    }
                    else{
                      echo "<a href='logout.php'>Logout</a>";
                    }

                   ?>
                </li>
                <li>
                  <?php

                    if(isset($_SESSION['customer_email'])){
                      $name = $_SESSION['customer_email'];
                      echo "<a href='customers/my_account.php'>$name</a>";
                    }
                    else{
                      echo "<a href='#'>Guest</a>";
                    }

                   ?>

                </li>


              </ul>
            </div>
          </div>
        </nav>


  </body>

  <!-- bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
