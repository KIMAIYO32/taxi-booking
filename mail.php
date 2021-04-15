<?php include('config.php');
//function checks email address
function emailChecker($email)
{
  global $mysqli, $safe_email, $check_res;
  //check that email is not yet in the list
  $safe_email = mysqli_real_escape_string($mysqli,$email);
  $check_sql = "select id from mst_sub where email ='".$safe_email."'";
$check_sql = mysqli_query($msqli,$check_sql) or
die(mysqli_error($msqli));
}

 ?>
