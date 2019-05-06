

<body>


  <form method="POST" id="signup-form" class="signup-form" action="" enctype="multipart/form-data">
      <h2 class="form-title">Insert Products</h2>
      <div class="form-group">
          <input id="name" class="input100" type="text" name="product_title" placeholder="Enter Product Title..." required>
      </div>
      <div class="form-group">
        <select class="js-select2" name="product_cat" required>
          <option>Select Category</option>
          <!-- calling addCategories function to display the already exsits categories -->
          <?php
            addCategories();
           ?>
        </select>
      </div>
      <div class="form-group">
        <select class="js-select2" name="product_brand" required>
          <option>Select Brand</option>

          <!-- calling addBrands function to display the already exsits brands -->
          <?php
            addBrands();
           ?>
        </select>
      </div>
      <div class="form-group">
        <input class="input-file" type="file" name="product_image" id="file" required />
      </div>
      <div class="form-group">
        <input id="name" class="input100" type="text" name="product_price" placeholder="Enter Product Price..." required>
      </div>
      <div class="form-group">
        <textarea id="message" class="input100" name="product_desc" placeholder="Type Product Description..." rows="15"></textarea>
      </div>
      <div class="form-group">
        <input id="name" class="input100" type="text" name="product_keywords" placeholder="Enter Product Keywords..." required>
      </div>
      <div class="form-group">
        <button class="contact100-form-btn" name="insert_post">
          Insert Products
        </button>
      </div>
  </form>

  </div>
  </div>


  </div>

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




</body>
</html>
