<?php session_start();
if(!isset($_SESSION['user'])) { 
 $_SESSION['redirectURL']=$_SERVER['REQUEST_URL'];
header('location:login.php');

}
?>
<!DOCTYPE html>

<head>

<title>Login</title>
<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap-responsive.css" />
</head>
<body>
<div class="container-fluid">


          <div class="row-fluid">
          <!--fullwidth row-->
          <div class="span12">
          <div class="well">
<?php include 'navbar_fragment.php'; ?>

<center><h3>User Info</h3></center>
<hr />



<?php

$userName=$_SESSION['user'];

include "connect.php";
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
 
 
$sql = "SELECT full_name, phone, email FROM reg WHERE user_name='".$userName."'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  
    while($row = mysqli_fetch_assoc($result)) {
        echo "<h1>Name: " . $row["full_name"]. "<br> Phone No: " . $row["phone"]. "<br>Email: " . $row["email"]. "<br></h1>"; 
    }
} else {

    echo  "$userName";
}
$phn1 = mysqli_fetch_array(mysqli_query($con,"SELECT phone FROM reg WHERE user_name='".$userName."'"));
    

$phn1['phone'];
$phn=$phn1['phone'];
$_SESSION['pno']=$phn;

$mail1 = mysqli_fetch_array(mysqli_query($con,"SELECT email FROM reg WHERE user_name='".$userName."'"));
    

$mail1['email'];
$mail=$mail1['email'];
$_SESSION['ml']=$mail;



?>