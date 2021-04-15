<?php
session_start();
include("config.php");
$username  = $_POST['username'];
$password  = $_POST['password'];

$sql = "select * from mstr_prof where username = ('".$username."') and password = ('".$password."') ";

if(mysqli_query($link,$sql))
{ 
    echo "records were added";
    header("location:home.php");
}

$rs = mysqli_query($link,$sql) or die(mysqli_error($link));

$c=mysqli_num_rows($rs);
$row = mysqli_fetch_array($rs);
if($c==1)
{
    $_SESSION['uname'] = $username;
}
else
{
header("location:index.php?msg=Sorry!...Invalid User");
}
?>
