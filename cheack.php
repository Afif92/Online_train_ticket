<?php session_start();
if(!isset($_SESSION['user'])) { 
header('location:login.php');

}
?>
<head>

<title>Register</title>
<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap-responsive.css" />
</head>
<body>
<div class="container-fluid">


          <div class="row-fluid">
          <!--fullwidth row-->
          <div class="span12">
          <div class="well">


<?php

		
		$user_name=$_POST['user_name'];
		$full_name=$_POST['full_name'];
		$date=$_POST['date'];
		$month=$_POST['month'];
		$year=$_POST['year'];
		$gender=$_POST['gender'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$password=$_POST['password'];

		if($_POST['user_name']==""){
			echo "<h1>User Name Empty</h1>";
		}
		else if($_POST['full_name']==""){
			echo "<h1>Full Name Empty</h1>";
			}
			
		else if($_POST['date']=='none'){
			echo "<h1>Date Empty</h1>";
		}
		else if($_POST['month']=='none'){
			echo "<h1>Month Empty</h1>";
		}
		else if($_POST['year']=='none'){
			echo "<h1>Year Empty</h1>";
		}
		else if($_POST['gender']==""){
		echo "<h1>Empty Gender</h1>";
		}
			
		else if($_POST['phone']==""){
			echo "<h1>Phone Empty</h1>";
		}
		else if($_POST['email']==""){
			echo "<h1>Email  Empty</h1>";
		}
		else if($_POST['password']==""){
			echo "<h1>Password  Empty</h1>";
		}
		else if($_POST['c_pass']==""){
			echo "<h1>Confirm Password  Empty</h1>";
		}


		else if(strpos($email,'@')==false || strpos($email,'.com')==false){
			echo "Invalid Email";	
		}
		else if($_POST['password']!=$_POST['c_pass']){
			echo "<h1>Password Did not match</h1>";
		}

		else{
		
			 echo " ";
			 include("insert.php");
			 }

			
     
		
?>
</body>
