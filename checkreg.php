<?php
include"config.php";
if (isset(
 $_POST['fname'],
 $_POST['lname'],
$_POST['mname'],
$_POST['gender'],
 $_POST['address'],
$_POST['phone'],
$_POST['email'],
 $_POST['uname'],
$_POST['paswrd'],
 $_POST['rpswrd'],

)) {
$fname = $_POST["fname"];
$lnames = $_POST['lname'];
$mname = $_POST['mname'];
$gnder = $_POST['gender'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$username = $_POST['uname'];
$password =$_POST['paswrd'];
$confirmpass= $_POST['rpswrd'];


if (strlen($password)<6){
        $password_error="Password must have atleast 6 characters";
        echo $password_error;
    }else{
        $store_password=password_hash($password,PASSWORD_DEFAULT);
    }

    if ($confirmpass!=$password){
        $con_password_error="Passwords do not match";
         echo $con_password_error;
    } else{

        $store_conf_pass=password_hash($confirmpass,PASSWORD_DEFAULT);
    }


    if (empty($password_error) and empty($con_password_error)){


        
$sql="INSERT INTO mstr_prof(firstname,middlename,lastname,gender,address,contact_no,email,username,password,rpassword)
values ('".$fname."','".$mname."','".$lnames."','".$gnder."','".$address."','".$phone."','".$email."','".$username."','".$password."','".$confirmpass."')";




        $result=mysqli_query($link,$sql);

        if ($result){
            echo "You have registered successfully";
            header("Location:index.php");
        } else{

            echo "Error executing $sql".mysqli_error($link);

        }

    }

  mysqli_close($link);
}
   
// Include config file


        
