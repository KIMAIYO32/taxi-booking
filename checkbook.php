<?php
include"config.php";
if (isset(
 $_POST['fname'],
 $_POST['id'],
 $_POST['phone'],
$_POST['where'],
$_POST['upto'],
 $_POST['datetime'],
$_POST['vehicle'],
$_POST['pay'],
$_POST['hours'],

)) {
$fname = $_POST["fname"];
$idno= $_POST['id'];
$phoneno=$_POST['phone'];
$lfro = $_POST['where'];
$upton = $_POST['upto'];
$datetime= $_POST['datetime'];
$vehicle = $_POST['vehicle'];
$pay= $_POST['pay'];
$hours = $_POST['hours'];

        




$sql="INSERT INTO mstr_booking( fullnames, idnumber, phonenumber, lfrom,upton, ldatetime, car, visa, perday) VALUES ('".$fname."','".$idno."','".$phoneno."','".$lfrom."','".$upton."','".$datetime."','".$vehicle."','".$pay."','".$hours."')";

 
        $result=mysqli_query($link,$sql);

        if ($result){
            echo "You have registered successfully";
            header("Location:home.php");
        } else{

            echo "Error executing $sql".mysqli_error($link);

        }
   }
    

        
