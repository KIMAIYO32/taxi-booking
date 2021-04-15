<?php
include("config.php");
$mail = $_POST['email'];
$nfname = $_POST['nwname'];
$nlname = $_POST['newlname'];
$naddress = $_POST['newadrs'];
$nemail = $_POST['newmail'];
$nphone = $_POST['newcon'];
mysql_query("UPDATE mstr_prof SET firstname='$nfname',lastname='$nlname',address='$naddress',
  contact_no='$nphone',email='$nemail' WHERE email='$mail'");
		header("location:viewusers.php?msg=UPDATED!");
?>
