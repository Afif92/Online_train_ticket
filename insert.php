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
		  <?php include 'navbar_fragment.php'; ?>
<?php
$host='localhost';
	$user='root';
	$pass='';
	$db='onlinetickets';
		$con = mysqli_connect($host,$user,$pass,$db);
	

	$db_selected = mysqli_select_db($con, $db);
		if (!$db_selected){
        echo "Cannot connect to the database.";
        exit;
		}
	

		$sql = "INSERT INTO reg (user_name, full_name, date, month, year , gender , phone, email, password) VALUES ('$user_name', '$full_name', '$date', '$month', '$year', '$gender', '$phone', '$email', '$password')";
				
		if(!mysqli_query($con,$sql))
		{
			 echo "<h1>Username already registered</h1>";
		}
		else{
			 echo "<h1>You have Registered Successfully!!! Please login to book ticket</h1>";
		}



?>
</body>