<?php
session_start();
include("config.php");

$username  = $_POST['admnid'];
$pswrd = $_POST['prwd'];

$selectLoginQuery = "select * from mstr_admin where username = ('".$username."') and password = ('".$pswrd."') ";
$msg = base64_encode("Login Successfully");
if(mysqli_query($link,$selectLoginQuery));
{
	header("location:admin.php?msg=$msg");
} 

 {
	header("location:home.php?msg=Sorry!...Invalid User");

} 


?>
