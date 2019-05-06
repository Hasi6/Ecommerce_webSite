<?php

    include('../includes/db.php');

    global $con;

    if(isset($_GET['delete_cat'])){

      $delete_id = $_GET['delete_cat'];

      $delete_cat = "DELETE FROM categories WHERE cat_id='$delete_id'";

      $run_delete = mysqli_query($con, $delete_cat);

      if ($run_delete) {
        echo "<script>window.open('admin_area.php?view_products','_self')</script>";
        echo "<script>alert('category Has been deleted successfully')</script>";
      }

    }

 ?>
