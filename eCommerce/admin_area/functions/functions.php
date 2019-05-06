<?php
include('../includes/db.php');

  // view all PRODUCTS
function viewProduct(){

  global $con;

  $get_pro = "SELECT * FROM products";

  $run_pro = mysqli_query($con, $get_pro);

  $number = 0;

  while($row_pro=mysqli_fetch_array($run_pro)){

    $pro_title = $row_pro['product_title'];
    $pro_image = $row_pro['product_image'];
    $pro_price = $row_pro['product_price'];
    $pro_id = $row_pro['product_id'];

    $number++;
echo"
    <tbody>
        <tr>
          <td class='column1'>$pro_id </td>
          <td class='column2'>$pro_title </td>
          <td class='column3'><img src='product_images/$pro_image' height='60' width='60'> </td>
          <td class='column4'>$pro_price </td>
          <td class='column5'><a href='edit_product.php?edit_pro=$pro_id'>Edit</a> </td>
          <td class='column6'><a href='admin_area.php?delete_pro=$pro_id'>Delete</a> </td>
        </tr>
    </tbody>
";
  }
}


function editProducts(){

  global $con;

  if(isset($_GET['edit_pro'])){

    $id = $_GET['edit_pro'];

    $select_product = "SELECT * FROM products WHERE product_id = '$id'";

    $run_pro = mysqli_query($con, $select_product);

    $row_product = mysqli_fetch_array($run_pro);

    $title = $row_product['product_title'];
    $cat = $row_product['product_cat'];
    $brand = $row_product['product_brand'];
    $price = $row_product['product_price'];
    $desc = $row_product['product_desc'];
    $keyword= $row_product['product_keywords'];

    $image = $row_product['product_image'];


  }



}

 ?>
