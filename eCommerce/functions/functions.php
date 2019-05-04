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
          <p><a href='ecommerce.php?pro_id=$pro_id' class='btn btn-primary' role='button'><span>$ $pro_price <br></span> Add to Cart</a></p>
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
          <p><a href='ecommerce.php?pro_id=$pro_id' class='btn btn-primary' role='button'><span>$ $pro_price <br></span> Add to Cart</a></p>
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
          <p><a href='ecommerce.php?pro_id=$pro_id' class='btn btn-primary' role='button'><span>$ $pro_price <br></span> Add to Cart</a></p>
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
        <p><a href='ecommerce.php?pro_id=$pro_id' class='btn btn-primary' role='button'><span>$ $pro_price <br></span> Add to Cart</a></p>
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
        <p><a href='ecommerce.php?pro_id=$pro_id' class='btn btn-primary' role='button'><span>$ $pro_price <br></span> Add to Cart</a></p>
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
        <p><a href='ecommerce.php?pro_id=$pro_id' class='btn btn-primary' role='button'><span>$ $pro_price <br></span> Add to Cart</a></p>
        <h3>Product Id: $pro_id</h3>
      </div>
    </div>
    ";
    }
  }

}

// get user ip address to add cart
// usersla gdk eka para gttoth pro id eka use krnna be eka nisa userslata uniq id ekak one hodama eka ip address eka
function getIp() {
    $ip = $_SERVER['REMOTE_ADDR'];

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }

    return $ip;
}


// get products to Cart
function cart(){

  if(isset($_GET['pro_id'])){

    global $con;

    $ip = getIp();

    $pro_id = $_GET['pro_id'];

    $check_pro = "SELECT * FROM cart WHERE ip_add ='$ip' AND  p_id ='$pro_id'";

    $run_check = mysqli_query($con, $check_pro);

    if(mysqli_num_rows($run_check) > 0){
      echo "<script>window.alert('Already in Cart')</script>
      <script>window.open('ecommerce.php','_self')</script>"; //donothing
    }
    else{

        $insert_pro = "INSERT INTO cart (p_id,ip_add) VALUES ('$pro_id','$ip')";

        $run_pro = mysqli_query($con, $insert_pro);

        echo "<script>window.alert('Added to the Cart')</script>
        <script>window.open('ecommerce.php','_self')</script>";
    }

  }





}

// display added items
function totalItems(){

  if(isset($_GET['pro_id'])){

    global $con;

    $ip = getIp();

    $get_items = "SELECT * FROM cart WHERE ip_add='$ip'";

    $run_items = mysqli_query($con, $get_items);

    $count_items = mysqli_num_rows($run_items);
}

    else{ //to auto update the total items and total price
      global $con;

      $ip = getIp();

      $get_items = "SELECT * FROM cart WHERE ip_add='$ip'";

      $run_items = mysqli_query($con, $get_items);

      $count_items = mysqli_num_rows($run_items);
    }

    echo $count_items;

}

//getting total price

function totalPrice(){

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

      $values = array_sum($product_price);

      $total_price += $values;

    }

  }

  echo $total_price;

}


function customerRegitration(){

  global $con;


if(isset($_POST['register'])){

  $ip = getIp();

  $c_name = $_POST['c_name'];
  $c_email = $_POST['c_email'];
  $c_pass = $_POST['c_pass'];
  $c_country = $_POST['c_country'];
  $c_city = $_POST['c_city'];
  $c_contact = $_POST['c_contact'];
  $c_address = $_POST['c_address'];

  $c_image = $_FILES['c_image']['name'];

  $c_image_tmp = $_FILES['c_image']['tmp_name'];

  move_uploaded_file($c_image_tmp, "customer/customer_images/$c_image");

  $insert_customers = "INSERT INTO customers (customer_ip,customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image)
  VALUES ('$ip','$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image')";

  $run_customers = mysqli_query($con, $insert_customers);

  // if ($run_customers) {
  //
  //   echo "<script>alert('Registration Succsessful')</script>";
  //   echo "<script>window.open('customer_register.php','_self')</script>";
  //
  // }

  $sel_cart = "SELECT * FROM cart WHERE ip_add='$ip'";

  $run_cart = mysqli_query($con, $sel_cart);

  $check_cart = mysqli_num_rows($run_cart);

  if ($check_cart == 0) {

    $_SESSION['customer_emil']=$c_email;

    echo "<script>alert('Your Account hasbeen Created Succsessfully, now you can continue Shopping')</script>";
    echo "<script>window.open('customer/my_account.php','_self')</script>";
  }
  else{

    $_SESSION['customer_emil']=$c_email;

    echo "<script>alert('Your Account hasbeen Created Succsessfully, now you can continue Shopping')</script>";
    echo "<script>window.open('checkout.php','_self')</script>";
  }


}


}









?>
