<?php
include("config.php");
$olduname = $_POST['uname'];
$newuname = $_POST['newadmname'];
$newpass = $_POST['newpswrd'];
$sql="UPDATE mstr_admin SET username='$newuname',password='$newpass' WHERE username='$olduname'";
		header("location:viewadmn.php?msg=UPDATED!");
if(mysqli_query($link, $sql)){
    echo "Records were updated successfully.";
} else {
   header("location:viewadmn.php?msg=UPDATED!"); 
}
 
// Close connection
mysqli_close($link);
?>
?>
