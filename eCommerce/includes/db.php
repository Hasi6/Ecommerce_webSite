<?php
$con = mysqli_connect("localhost","root","","ecommerce");

if (mysqli_connect_errno()) {
  echo "faild to connect to the database: ".mysqli_connect_errno();
}
?>
