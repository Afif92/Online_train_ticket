<?php session_start();
if(!isset($_SESSION['user'])) { 
header('location:login.php');

}
?>
<head>

<title>My Tickets</title>
		<link href="css/bootstrap.css" rel="stylesheet" />
</head>
<body>
<div class="container-fluid">


          <div class="row-fluid">
          <!--fullwidth row-->
          <div class="span12">
          <div class="well">
		  
<?php
include "connect.php";
     $userName=$_SESSION['user'];
     $q1 = "SELECT `day`,`user_name`, `seat`,`from`,`to`,`car_name`, `price` FROM `1tista_c1` WHERE `user_name`='".$userName."'";
     $result = mysqli_query($con, $q1);

        if (mysqli_num_rows($result) > 0) {
  
        while($row = mysqli_fetch_assoc($result)) {
        echo "Date :" .$row["day"]. "<br>Name: " . $row["user_name"]."<br> Car Name: " . $row["car_name"]. "<br> Seat No: " . $row["seat"]."<br>From :" .$row["from"]."<br>To :" .$row["to"]. "<br>price: " . $row["price"]. "<br>"; 
		echo "-----------------------";
		echo "<br>";
        }
		} else {

			echo  "   ";
		}
		   $q2 = "SELECT `day`,`user_name`, `seat`,`from`,`to`,`car_name`, `price`  FROM 1tista_c2 WHERE user_name='".$userName."'";
     $result = mysqli_query($con, $q2);

        if (mysqli_num_rows($result) > 0) {
  
        while($row = mysqli_fetch_assoc($result)) {
        echo "Date :" .$row["day"]. "<br>Name: " . $row["user_name"]."<br> Car Name: " . $row["car_name"]. "<br> Seat No: " . $row["seat"]."<br>From :" .$row["from"]."<br>To :" .$row["to"]. "<br>price: " . $row["price"]. "<br>"; 
		echo "-----------------------";
		echo "<br>";
        }
		} else {

			echo  "   ";
		}
		   $q3 = "SELECT `day`,`user_name`, `seat`,`from`,`to`,`car_name`, `price`  FROM 1tista_c3 WHERE user_name='".$userName."'";
     $result = mysqli_query($con, $q3);

        if (mysqli_num_rows($result) > 0) {
  
        while($row = mysqli_fetch_assoc($result)) {
        echo "Date :" .$row["day"]. "<br>Name: " . $row["user_name"]."<br> Car Name: " . $row["car_name"]. "<br> Seat No: " . $row["seat"]."<br>From :" .$row["from"]."<br>To :" .$row["to"]. "<br>price: " . $row["price"]. "<br>"; 
		echo "-----------------------";
		echo "<br>";
        }
		} else {

			echo  "   ";
		}
		   $q4 = "SELECT `day`,`user_name`, `seat`,`from`,`to`,`car_name`, `price`  FROM 1tista_c4 WHERE user_name='".$userName."'";
     $result = mysqli_query($con, $q4);

        if (mysqli_num_rows($result) > 0) {
  
        while($row = mysqli_fetch_assoc($result)) {
        echo "Date :" .$row["day"]. "<br>Name: " . $row["user_name"]."<br> Car Name: " . $row["car_name"]. "<br> Seat No: " . $row["seat"]."<br>From :" .$row["from"]."<br>To :" .$row["to"]. "<br>price: " . $row["price"]. "<br>"; 
		echo "-----------------------";
		echo "<br>";
        }
		} else {

			echo  "   ";
		}
		   $q5 = "SELECT `day`,`user_name`, `seat`,`from`,`to`,`car_name`, `price`  FROM 1tista_c5 WHERE user_name='".$userName."'";
     $result = mysqli_query($con, $q5);

        if (mysqli_num_rows($result) > 0) {
  
        while($row = mysqli_fetch_assoc($result)) {
        echo "Date :" .$row["day"]. "<br>Name: " . $row["user_name"]."<br> Car Name: " . $row["car_name"]. "<br> Seat No: " . $row["seat"]."<br>From :" .$row["from"]."<br>To :" .$row["to"]. "<br>price: " . $row["price"]. "<br>"; 
		echo "-----------------------";
		echo "<br>";
        }
		} else {

			echo  "   ";
		}
		   $q6 = "SELECT `day`,`user_name`, `seat`,`from`,`to`,`car_name`, `price`  FROM 2tista_c1 WHERE user_name='".$userName."'";
     $result = mysqli_query($con, $q6);

        if (mysqli_num_rows($result) > 0) {
  
        while($row = mysqli_fetch_assoc($result)) {
        echo "Date :" .$row["day"]. "<br>Name: " . $row["user_name"]."<br> Car Name: " . $row["car_name"]. "<br> Seat No: " . $row["seat"]."<br>From :" .$row["from"]."<br>To :" .$row["to"]. "<br>price: " . $row["price"]. "<br>"; 
		echo "-----------------------";
		echo "<br>";
        }
		} else {

			echo  "   ";
		}
		   $q7 = "SELECT `day`,`user_name`, `seat`,`from`,`to`,`car_name`, `price`  FROM 2tista_c2 WHERE user_name='".$userName."'";
     $result = mysqli_query($con, $q7);

        if (mysqli_num_rows($result) > 0) {
  
        while($row = mysqli_fetch_assoc($result)) {
        echo "Date :" .$row["day"]. "<br>Name: " . $row["user_name"]."<br> Car Name: " . $row["car_name"]. "<br> Seat No: " . $row["seat"]."<br>From :" .$row["from"]."<br>To :" .$row["to"]. "<br>price: " . $row["price"]. "<br>"; 
		echo "-----------------------";
		echo "<br>";
        }
		} else {

			echo  "   ";
		}
		   $q8 = "SELECT `day`,`user_name`, `seat`,`from`,`to`,`car_name`, `price`  FROM 2tista_c3 WHERE user_name='".$userName."'";
     $result = mysqli_query($con, $q8);

        if (mysqli_num_rows($result) > 0) {
  
        while($row = mysqli_fetch_assoc($result)) {
        echo "Date :" .$row["day"]. "<br>Name: " . $row["user_name"]."<br> Car Name: " . $row["car_name"]. "<br> Seat No: " . $row["seat"]."<br>From :" .$row["from"]."<br>To :" .$row["to"]. "<br>price: " . $row["price"]. "<br>"; 
		echo "-----------------------";
		echo "<br>";
        }
		} else {

			echo  "   ";
		}
		   $q9 = "SELECT `day`,`user_name`, `seat`,`from`,`to`,`car_name`, `price`  FROM 2tista_c4 WHERE user_name='".$userName."'";
     $result = mysqli_query($con, $q9);

        if (mysqli_num_rows($result) > 0) {
  
        while($row = mysqli_fetch_assoc($result)) {
        echo "Date :" .$row["day"]. "<br>Name: " . $row["user_name"]."<br> Car Name: " . $row["car_name"]. "<br> Seat No: " . $row["seat"]."<br>From :" .$row["from"]."<br>To :" .$row["to"]. "<br>price: " . $row["price"]. "<br>"; 
		echo "-----------------------";
		echo "<br>";
        }
		} else {

			echo  "   ";
		}
		   $q10 = "SELECT `day`,`user_name`, `seat`,`from`,`to`,`car_name`, `price`  FROM 2tista_c5 WHERE user_name='".$userName."'";
     $result = mysqli_query($con, $q10);

        if (mysqli_num_rows($result) > 0) {
  
        while($row = mysqli_fetch_assoc($result)) {
        echo "Date :" .$row["day"]. "<br>Name: " . $row["user_name"]."<br> Car Name: " . $row["car_name"]. "<br> Seat No: " . $row["seat"]."<br>From :" .$row["from"]."<br>To :" .$row["to"]. "<br>price: " . $row["price"]. "<br>"; 
		echo "-----------------------";
		echo "<br>";
        }
		} else {

			echo  "   ";
		}
		   $q11 = "SELECT `day`,`user_name`, `seat`,`from`,`to`,`car_name`, `price`  FROM 2tista_extra WHERE user_name='".$userName."'";
     $result = mysqli_query($con, $q11);

        if (mysqli_num_rows($result) > 0) {
  
        while($row = mysqli_fetch_assoc($result)) {
        echo "Date :" .$row["day"]. "<br>Name: " . $row["user_name"]."<br> Car Name: " . $row["car_name"]. "<br> Seat No: " . $row["seat"]."<br>From :" .$row["from"]."<br>To :" .$row["to"]. "<br>price: " . $row["price"]. "<br>"; 
		echo "-----------------------";
		echo "<br>";
        }
		} else {

			echo  "   ";
		}
		

	include 'navbar_fragment.php'; ?>

