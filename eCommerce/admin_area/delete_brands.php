<?php

    include('../includes/db.php');

    global $con;

    if(isset($_GET['delete_brand'])){

      $delete_id = $_GET['delete_brand'];

      $delete_brand = "DELETE FROM brands WHERE brand_id='$delete_id'";

      $run_delete = mysqli_query($con, $delete_brand);

      if ($run_delete) {
        echo "<script>alert('brand Has been deleted successfully')</script>";
        echo "<script>window.open('admin_area.php?view_products','_self')</script>";
      }

    }

 ?>
