<?php



  // Getting Categories
  function getCats(){

    global $con;

    $get_cats = "SELECT * FROM categories";
    $run_cats = mysqli_query($con, $get_cats);

    while($row_cats = mysqli_fetch_array($run_cats)){

      $cat_id = $row_cats['cat_id'];
      $cat_title = $row_cats['cat_title'];

      echo "<li><a href='#'>$cat_title</a></li>";
    }
  }

  // Getting Brands
  function getBrands(){

    global $con;

    $get_brands = "SELECT * FROM brands";
    $run_brands = mysqli_query($con, $get_brands);

    while($row_brands = mysqli_fetch_array($run_brands)){

      $brand_id = $row_brands['brand_id'];
      $brand_title = $row_brands['brand_title'];

      echo "<li><a href='#'>$brand_title</a></li>";
    }
  }

  // input brands options to admin page

  function addCategories(){

    global $con;

    $get_cats = "SELECT * FROM categories";
    $run_cats = mysqli_query($con, $get_cats);

    while($row_cats = mysqli_fetch_array($run_cats)){

      $cat_id = $row_cats['cat_id'];
      $cat_title = $row_cats['cat_title'];

      echo "<option value='$cat_id'>$cat_title</option>";
    }

  }

  // input category options to admin page
  function addBrands(){
    global $con;

    $get_brands = "SELECT * FROM brands";
    $run_brands = mysqli_query($con, $get_brands);

    while($row_brands = mysqli_fetch_array($run_brands)){

      $brand_id = $row_brands['brand_id'];
      $brand_title = $row_brands['brand_title'];

      echo "<option value='$brand_id'>$brand_title</option>";
    }
  }

  // get products to the main ldap_control_paged_result
  function getPro(){

    global $con;

    $get_pro = "SELECT * FROM products ORDER BY RAND() LIMIT 0,10";

    $run_pro = mysqli_query($con, $get_pro);

    while($row_pro = mysqli_fetch_array($run_pro)){

      $pro_id = $row_pro['product_id'];
      $pro_cat = $row_pro['product_cat'];
      $pro_brand = $row_pro['product_brand'];
      $pro_title = $row_pro['product_title'];
      $pro_price = $row_pro['product_price'];
      $pro_keyword = $row_pro['product_keywords'];
      $pro_image = $row_pro['product_image'];

      echo "
      <div class='thumbnail'> <img src='admin_area/product_images/$pro_image' alt='Thumbnail Image 1' class='img-responsive' width=200>
        <div class='caption'>
          <h3>
          $pro_title
          </h3>
          <p>$pro_keyword</p>
          <p><a href='#' class='btn btn-primary' role='button'><span>$ $pro_price <br></span> Add to Cart</a></p>
        </div>
      </div>
      ";

    }

  }


  function getSlideImage(){

    global $con;

    $get_image = "SELECT * FROM slideshows ORDER BY RAND() LIMIT 0,1";

    $run_img = mysqli_query($con, $get_image);

    while($row_img = mysqli_fetch_array($run_img)){

      $img_desc = $row_img['image_desc'];
      $slide_image = $row_img['slide_image'];

      echo "
      <img class='img-responsive' src='admin_area/slideshow_image/$slide_image' alt='thumb'>
       <div class='carousel-caption'> <h3>$img_desc</h3> </div>
      ";

    }

  }




?>
