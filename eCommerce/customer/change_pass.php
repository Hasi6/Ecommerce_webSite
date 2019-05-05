<?php

    $user = $_SESSION['customer_email'];

    $get_customer = "SELECT * FROM customers WHERE customer_email = '$user'";

    $run_customer = mysqli_query($con, $get_customer);

    $row_customer = mysqli_fetch_array($run_customer);

    $email = $row_customer['customer_email'];

 ?>
<form method="POST" id="signup-form" class="signup-form" action="" enctype="multipart/form-data">
    <h2 class="form-title">Change Password</h2>
      <div class="form-group">
          <input type="password" class="form-input" name="current_pass" id="password" placeholder="Current password"/required>
      </div>
      <div class="form-group">
          <input type="password" class="form-input" name="new_pass" id="password" placeholder="New password"/required>
      </div>
      <div class="form-group">
          <input type="password" class="form-input" name="cnew_pass" id="password" placeholder="Confirm New password"/required>
      </div>
      <div class="form-group">
          <input type="submit" name="change_pass" id="submit" class="form-submit" value="Change Password"/>
      </div>
</form>

<?php

  changePass($email);

 ?>
