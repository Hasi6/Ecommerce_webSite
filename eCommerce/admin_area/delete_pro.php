<?php

    include('../includes/db.php');

    global $con;

    if(isset($_GET['delete_pro'])){

      $delete_id = $_GET['delete_pro'];

      $delete_pro = "DELETE FROM products WHERE product_id='$delete_id'";

      $run_delete = mysqli_query($con, $delete_pro);

      if ($run_delete) {
        echo "<script>window.open('admin_area.php?view_products','_self')</script>";
        // echo "<script>alert('Products Has been deleted successfully')</script>";
      }

    }

 ?>
