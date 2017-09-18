<?php
include 'connect.php';


$userName    =    $_POST['txtUser'] ;
$password    =    $_POST['txtPassword'];



 
if(isset($_POST['btnLogin'])) 
{
$query  =    "select * from reg where user_name='$userName' and password='$password'";
$res    =    mysqli_query($con,$query);
$count	=	mysqli_num_rows($res);
if($count==1){

  session_start(); 
  
  $_SESSION['user']=$userName;
  header("location:user_info.php");
} 
else 
{
header("location:wrong_login.php");
 
}

}

 
?>