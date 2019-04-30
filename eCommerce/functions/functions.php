<?php



  // Getting Categories
  function getCats(){

    global $con;

    $get_cats = "SELECT * FROM categories";
    $run_cats = mysqli_query($con, $get_cats);

    while($row_cats = mysqli_fetch_array($run_cats)){

      $cat_id = $row_cats['cat_id'];
      $cat_title = $row_cats['cat_title'];

      echo "<li><a href='ecommerce.php?cat_id=$cat_id'>$cat_title</a></li>";
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

      echo "<li><a href='ecommerce.php?brand_id=$brand_id'>$brand_title</a></li>";
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

    if(!isset($_GET['cat_id'])){

      if(!isset($_GET['brand_id'])){

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
          <p><a href='details.php?pro_id=$pro_id'>Details</a></P>
          <p><a href='add_to_cart.php?pro_id=$pro_id' class='btn btn-primary' role='button'><span>$ $pro_price <br></span> Add to Cart</a></p>
        </div>
      </div>
      ";
      }
    }
  }
}


  // get slideshow Images
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

  // get details of detail page
  function getProDetails(){

    global $con;

    if(isset($_GET['pro_id'])){

    $product_id = $_GET['pro_id'];

    $get_pro = "SELECT * FROM products WHERE product_id='$product_id'";

    $run_pro = mysqli_query($con, $get_pro);

    while($row_pro = mysqli_fetch_array($run_pro)){

      $pro_id = $row_pro['product_id'];
      $pro_title = $row_pro['product_title'];
      $pro_price = $row_pro['product_price'];
      $pro_keyword = $row_pro['product_keywords'];
      $pro_image = $row_pro['product_image'];
      $pro_desc = $row_pro['product_desc'];

      echo "
      <div class='thumbnail'> <img src='admin_area/product_images/$pro_image' alt='Thumbnail Image 1' class='img-responsive'>
        <div class='caption'>
          <h3>
          $pro_title
          </h3>
          <h2>$pro_keyword</h2>
          <p>$pro_desc</p>
          <p><a href='add_to_cart.php?pro_id=$pro_id' class='btn btn-primary' role='button'><span>$ $pro_price <br></span> Add to Cart</a></p>
          <h3 style='color: green;'>Product Id : $product_id</h3>
        </div>
      </div>
      ";

    }
  }
  }

// get products according to Cateory
  function getCatPro(){

    if(isset($_GET['cat_id'])){

      $cat_id = $_GET['cat_id'];

    global $con;

    $get_cat_pro = "SELECT * FROM products WHERE product_cat='$cat_id'";

    $run_cat_pro = mysqli_query($con, $get_cat_pro);

    $count_cats = mysqli_num_rows($run_cat_pro);

    if($count_cats == 0){
      echo "<h3> There is no Products in this Category</h3>";
    }
    else{
      echo "<h3 style='width:100%;'>There are $count_cats Products in this Cateory</h3> <br/>";
    }

    while($row_cat_pro = mysqli_fetch_array($run_cat_pro)){

      $pro_id = $row_cat_pro['product_id'];
      $pro_cat = $row_cat_pro['product_cat'];
      $pro_brand = $row_cat_pro['product_brand'];
      $pro_title = $row_cat_pro['product_title'];
      $pro_price = $row_cat_pro['product_price'];
      $pro_keyword = $row_cat_pro['product_keywords'];
      $pro_image = $row_cat_pro['product_image'];

      $display_cat_name = "<h2>$pro_cat</h2>";

      echo "
      <div class='thumbnail'> <img src='admin_area/product_images/$pro_image' alt='Thumbnail Image 1' class='img-responsive' width=200>
        <div class='caption'>
          <h3>
          $pro_title
          </h3>
          <p>$pro_keyword</p>
          <p><a href='details.php?pro_id=$pro_id'>Details</a></P>
          <p><a href='add_to_cart.php?pro_id=$pro_id' class='btn btn-primary' role='button'><span>$ $pro_price <br></span> Add to Cart</a></p>
        </div>
      </div>
      ";
      }
  }
  }

// get products according to Brand
function getBrandPro(){

  if(isset($_GET['brand_id'])){

    $brand_id = $_GET['brand_id'];

  global $con;

  $get_brand_pro = "SELECT * FROM products WHERE product_brand='$brand_id'";

  $run_brand_pro = mysqli_query($con, $get_brand_pro);

  $count_brands = mysqli_num_rows($run_brand_pro);

  if($count_brands == 0){
    echo "<h3> There is no Products in this Brand</h3>";
  }
  else{
    echo "<h3 style='width:100%;'>There are $count_brands Products in this Brand</h3> <br/>";
  }

  while($row_brand_pro = mysqli_fetch_array($run_brand_pro)){

    $pro_id = $row_brand_pro['product_id'];
    $pro_cat = $row_brand_pro['product_cat'];
    $pro_brand = $row_brand_pro['product_brand'];
    $pro_title = $row_brand_pro['product_title'];
    $pro_price = $row_brand_pro['product_price'];
    $pro_keyword = $row_brand_pro['product_keywords'];
    $pro_image = $row_brand_pro['product_image'];


    echo "
    <div class='thumbnail text-center'> <img src='admin_area/product_images/$pro_image' alt='Thumbnail Image 1' class='img-responsive' width=200>
      <div class='caption'>
        <h3>
        $pro_title
        </h3>
        <p>$pro_keyword</p>
        <p><a href='details.php?pro_id=$pro_id'>Details</a></P>
        <p><a href='add_to_cart.php?pro_id=$pro_id' class='btn btn-primary' role='button'><span>$ $pro_price <br></span> Add to Cart</a></p>
      </div>
    </div>
    ";
    }
}
}

// get all produts to the all_products.php ldap_control_paged_result
function getAllPro(){

  if(!isset($_GET['cat_id'])){

    if(!isset($_GET['brand_id'])){

  global $con;

  $get_pro = "SELECT * FROM products ORDER BY product_id DESC";

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
        <p><a href='details.php?pro_id=$pro_id'>Details</a></P>
        <p><a href='add_to_cart.php?pro_id=$pro_id' class='btn btn-primary' role='button'><span>$ $pro_price <br></span> Add to Cart</a></p>
      </div>
    </div>
    ";
    }
  }
}
}

// get products by search field
function getSearchPro(){

  global $con;

  if(isset($_GET['search'])){

  $search_query = $_GET['user_query'];

  $get_pro = "SELECT * FROM products WHERE product_keywords LIKE '%$search_query%'";

  $run_pro = mysqli_query($con, $get_pro);

  $count_search_products = mysqli_num_rows($run_pro);

  if($count_search_products == 0){
    echo "<h3> There is no Products</h3>";
  }
  else{
    echo "<h3 style='width:100%;'>There are $count_search_products Products</h3> <br/>";
  }

  while($row_pro = mysqli_fetch_array($run_pro)){

    $pro_id = $row_pro['product_id'];
    $pro_cat = $row_pro['product_cat'];
    $pro_brand = $row_pro['product_brand'];
    $pro_title = $row_pro['product_title'];
    $pro_price = $row_pro['product_price'];
    $pro_keyword = $row_pro['product_keywords'];
    $pro_image = $row_pro['product_image'];

    echo "
    <div class='thumbnail text-center'> <img src='admin_area/product_images/$pro_image' alt='Thumbnail Image 1' class='img-responsive' width=200>
      <div class='caption'>
        <h3>
        $pro_title
        </h3>
        <p>$pro_keyword</p>
        <p><a href='details.php?pro_id=$pro_id'>Details</a></P>
        <p><a href='add_to_cart.php?pro_id=$pro_id' class='btn btn-primary' role='button'><span>$ $pro_price <br></span> Add to Cart</a></p>
        <h3>Product Id: $pro_id</h3>
      </div>
    </div>
    ";
    }
  }

}

?>
