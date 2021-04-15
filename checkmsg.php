<?php
include("config.php");
$fname = $_POST['fnames'];
$email = $_POST['email'];
$subject = $_POST['sub'];
$message = $_POST['msg'];
$insertQuery = "insert into message (fnames,email,subject,message)
values ('".$fname."','".$email."','".$subject."','".$message."')";
//insertQuerry
$msg = base64_encode("Posted Successfully");

	if (mysqli_query($link,$insertQuery))
      {
		header("location:email.php?msg=$msg");
	   }
	else
	 {
		header("location:contact.php?msg=Not posted");
	  }

?>
