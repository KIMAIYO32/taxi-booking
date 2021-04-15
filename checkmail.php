<?php
include("config.php");
$mail = $_POST['mail'];
$insertQuery = "insert into mstr_subscribe (email,subdate) values ('".$mail."',now())";
//insertQuerry
$msg = base64_encode("Posted Successfully");

	if(mysql_query($insertQuery))
      {
		header("location:sub.php?msg=$msg");
	   }
	else
	 {
		header("location:comingsoon.php?msg=Not posted");
	  }

?>
