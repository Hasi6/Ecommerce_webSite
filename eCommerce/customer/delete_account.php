<?php

    $user = $_SESSION['customer_email'];

    $get_customer = "SELECT * FROM customers WHERE customer_email = '$user'";

    $run_customer = mysqli_query($con, $get_customer);

    $row_customer = mysqli_fetch_array($run_customer);

    $email = $row_customer['customer_email'];
    $pass = $row_customer['customer_pass'];

 ?>
<form method="POST" id="signup-form" class="signup-form" action="" enctype="multipart/form-data">
    <h2 class="form-title">Delete Account</h2>
      <div class="form-group">
          <input type="submit" name="delete_account" id="submit" class="form-submit" value="Delete Account"/>
      </div>
</form>

<?php

  deleteAccount($email);

 ?>
