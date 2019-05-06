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
          <td class='column5'><a href='admin_area.php?edit_pro'>Edit</a> </td>
          <td class='column6'><a href='admin_area.php?delete_pro'>Delete</a> </td>
        </tr>
    </tbody>
";
  }
}


 ?>
