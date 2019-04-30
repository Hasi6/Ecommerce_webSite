<?php
  include("header.php");
  include("functions/functions.php");
  include('includes/db.php');
?>

<!-- link css -->
<link rel="stylesheet" href="css/style.css">

<!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.css">

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
      <div class="container"id="guest_area">
          <span style="float:right;">Welcome guest! <br><b>Total Items: <?php totalItems(); ?> </b> <br> <b>Total Price: $ <?php totalPrice(); ?> </b> <br> <a href="cart.php">Go to cart</a></span>
          <?php
              echo $ip = getIp();
              cart();
           ?>
      </div>
      <nav class="nav navbar-expand-md navbar-custom">

        <div class="container" id="navigation-bar2">

          <ul class="nav navbar-nav">
              <?php
                getCats();
               ?>
          </ul>
          </div>
      </nav>
      <!-- <iframe src="admin_area/insert_category.php" width="100%" height="400px"></iframe> -->
<div class="container">
    <!-- <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div id="carousel1" class="carousel slide">
            <ol class="carousel-indicators">
              <li data-target="#carousel1" data-slide-to="0" class="active"> </li>
              <li data-target="#carousel1" data-slide-to="1" class=""> </li>
              <li data-target="#carousel1" data-slide-to="2" class=""> </li>
            </ol>
            <div class="carousel-inner">
              <div class="item">
              <?php
                getSlideImage();
               ?>
             </div>
              <div class="item active"> <div class="item">
              <?php
                getSlideImage();
               ?>
             </div></div>
              <div class="item"> <div class="item">
              <?php
                getSlideImage();
               ?>
             </div>
           </div>
            </div>
            <a class="left carousel-control" href="#carousel1" data-slide="prev"><span class="icon-prev"></span></a> <a class="right carousel-control" href="#carousel1" data-slide="next"><span class="icon-next"></span></a>
          </div>
        </div>
        <iframe src="admin_area/insert.php" width="100%" height="400px"></iframe>
</div> -->

    <hr>
  </div>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2"><img class="img-circle" alt="Free Shipping" src="img/40X40.gif"></div>
        <div class="col-lg-6 col-md-9 col-sm-9 col-xs-9">
          <h4>Free Shipping</h4>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2"><img class="img-circle" alt="Free Shipping" src="img/40X40.gif"></div>
        <div class="col-lg-6 col-md-9 col-sm-9 col-xs-9">
          <h4>Free Returns</h4>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
      <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-2"><img class="img-circle" alt="Free Shipping" src="img/40X40.gif"></div>
        <div class="col-lg-6 col-md-9 col-sm-9 col-xs-9">
          <h4>Low Prices</h4>
        </div>
      </div>
    </div>
  </div>
</div>
<hr>
<h2 class="text-center">RECOMMENDED PRODUCTS & BRANDS</h2>
<hr>
<nav class="nav navbar-expand-md navbar-custom">

  <div class="container" id="navigation-bar2">

    <ul class="nav navbar-nav">
        <?php
          getBrands();
          getBrandPro();
         ?>
    </ul>
    </div>
</nav>
<!-- <iframe src="admin_area/insert_brand.php" width="100%" height="400px;"></iframe> -->


<div class="container">

    <div class="nav navbar-expand-md navbar-custom text-center m-2">
      <!-- <div class="container" id="navigation-bar2"> -->

        <ul class="nav navbar-nav">

        </ul>

<!-- cart table -->

<div class="table-users">
<div class="header">Check Add to Car</div>


<form class="" action="" method="post" enctype="multipart/form-data">
<table cellspacing="0" class="text-center">
<tr>
  <th width=20% class="text-center">Prduct(s)</th>
  <th width=20% class="text-center">Price</th>
  <th width=20% class="text-center">Quntity</th>
  <th width=20% class="text-center">Total Price</th>
  <th width=100% class="text-center" style="float:right">Remove</th>
</tr>

<tr>
   <?php

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





									 ?>
                   </tr>

                   <tr align='center'>
                     <td width=20%><?php echo $product_title; ?> <br>
                       <img src="admin_area/product_images/<?php echo $product_image ?>" alt="<?php echo $pro_id ;?> image">
                       <br>
                       Product Id: <?php echo $product_id ?>
                       </td>
                     <td width=20%> $ <?php echo $single_price ?></td>
                     <td width=20%><input type="number" name="qty" style="width:40px;"></td>
                     <td width=20%><?php echo  'hello everone' ;?></td>
                     <td><input type="checkbox" name="remove[]" style="width:150px; margin:0 auto;"></td>

                   </tr>
                <?php
              }

               }
               echo $total_price;

               ?>



</table>

</form>

</div>

<!-- end of cart table -->

        <!-- </div> -->

    </div>
    <!-- <iframe src="admin_area/insert_product.php" width="100%" height="400px"></iframe> -->
  </div>
  <nav class="text-center">
    <!-- Add class .pagination-lg for larger blocks or .pagination-sm for smaller blocks-->
    <ul class="pagination">
      <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">&laquo;</span> </a> </li>
      <li class="active"><a href="#">1</a></li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li class="disabled"><a href="#">5</a></li>
      <li> <a href="#" aria-label="Next"> <span aria-hidden="true">&raquo;</span> </a> </li>
    </ul>
  </nav>
</div>
<hr>
<h2 class="text-center">FEATURED PRODUCTS</h2>
<hr>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6">
      <div class="media-object-default">
        <div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object" src="img/100X125.gif" alt="placeholder image"> </a> </div>
          <div class="media-body">
            <h4 class="media-heading">Product</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, vitae doloremque voluptatum doloribus neque assumenda velit sapiente quas aliquam ratione. Sed possimus corporis dolorum optio eaque in asperiores soluta expedita! </div>
        </div>
        <div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object" src="img/100X125.gif" alt="placeholder image"> </a> </div>
          <div class="media-body">
            <h4 class="media-heading">Product</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, quasi doloribus non repellendus quae aperiam. Quos, eligendi itaque soluta ut dignissimos reprehenderit commodi laboriosam quis atque minus enim magnam delectus.</div>
        </div>
        <div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object" src="img/100X125.gif" alt="placeholder image"></a></div>
          <div class="media-body">
            <h4 class="media-heading">Product</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, repellendus, ad, adipisci neque earum culpa magnam veritatis ipsum dolores odio laboriosam sed veniam accusamus! Architecto, provident nulla recusandae repellendus illo!</div>
        </div>
      </div>
    </div>
    <hr class="hidden-md hidden-lg">
    <div class="col-lg-4 col-md-6">
      <div class="media-object-default">
        <div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object" src="img/100X125.gif" alt="placeholder image"></a></div>
          <div class="media-body">
            <h4 class="media-heading">Product</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, eos, et in quam laboriosam ipsum laudantium laborum provident nihil modi reprehenderit tempora voluptatum quasi non libero quaerat vel. Assumenda, officiis?</div>
        </div>
        <div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object" src="img/100X125.gif" alt="placeholder image"></a></div>
          <div class="media-body">
            <h4 class="media-heading">Product</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, minus, praesentium dignissimos non provident et consectetur illo expedita aliquam laboriosam esse incidunt deleniti accusantium debitis voluptas. Non vitae quos dolorem.</div>
        </div>
        <div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object" src="img/100X125.gif" alt="placeholder image"></a></div>
          <div class="media-body">
            <h4 class="media-heading">Product</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, ducimus quidem aliquam voluptate quas impedit modi neque quasi deleniti dicta. Dolore, provident, unde voluptas dicta fugit odit maxime eius minus!</div>
        </div>
      </div>
    </div>
    <hr class="hidden-lg">
    <div class="col-lg-4 col-md-12 hidden-md">
      <div class="media-object-default">
        <div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object" src="img/100X125.gif" alt="placeholder image"></a></div>
          <div class="media-body">
            <h4 class="media-heading">Media heading 1</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro dolorum reprehenderit vitae omnis. Quidem, recusandae, magni ut perspiciatis nobis consequuntur ullam molestias molestiae obcaecati ea labore aspernatur modi. Impedit, fugit!</div>
        </div>
        <div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object" src="img/100X125.gif" alt="placeholder image"></a></div>
          <div class="media-body">
            <h4 class="media-heading">Media heading 2</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, libero, ea itaque atque vero quidem esse optio minus tenetur dolorem delectus nemo fugit deserunt quibusdam veritatis assumenda obcaecati praesentium omnis!</div>
        </div>
        <div class="media">
          <div class="media-left"> <a href="#"> <img class="media-object" src="img/100X125.gif" alt="placeholder image"></a></div>
          <div class="media-body">
            <h4 class="media-heading">Media heading 2</h4>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, cumque, ad voluptatibus vel perspiciatis reprehenderit magni in recusandae voluptatum iusto commodi laudantium veritatis esse labore nisi error tempora debitis impedit.</div>
        </div>
      </div>
    </div>
  </div>
</div>
<hr>
  <div class="container well">
    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-7">
        <div class="row">
          <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
            <div>
              <ul class="list-unstyled">
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4 col-md-4 col-lg-4  col-xs-6">
            <div>
              <ul class="list-unstyled">
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4 col-md-4 col-lg-4 col-xs-6">
            <div>
              <ul class="list-unstyled">
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
                <li> <a>Link anchor</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-5">
        <address>
        <strong>MyStoreFront, Inc.</strong><br>
        Indian Treasure Link<br>
        Quitman, WA, 99110-0219<br>
        <abbr title="Phone">P:</abbr> (123) 456-7890
      </address>
        <address>
        <strong>Full Name</strong><br>
        <a href="mailto:#">first.last@example.com</a>
        </address>
        </div>
    </div>
  </div>
</div>

<footer class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <p>Copyright © MyWebsite. All rights reserved.</p>
      </div>
    </div>
  </div>
</footer>
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>
