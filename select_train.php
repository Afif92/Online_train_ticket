<?php session_start();
if(!isset($_SESSION['user'])) { 
 $_SESSION['redirectURL']=$_SERVER['REQUEST_URL'];
header('location:login.php');

}
?>
<!DOCTYPE html>

<head>

    
	<title>Book Your Seat</title>
	<link href="css/bootstrap.css" rel="stylesheet" />
	<link href="css/bootstrap-theme.css" rel="stylesheet" />
	<link href="css/main.css" rel="stylesheet" />

	


</head>

<body>
<div class="container-fluid">


          <div class="row-fluid">
          <!--fullwidth row-->
          <div class="span12">
          <div class="well">
<?php include 'navbar_fragment.php'; ?>

<center><h3>Available Car Tickets</h3></center>
<hr />



<?php
		
		$date=$_POST['date'];
        $from=$_POST['from'];
		$to=$_POST['to'];
		$cls=$_POST['class'];
		echo "<h3>You have decided to travel from $from  to $to  in a $cls seat</h3>";
		
		
		$_SESSION['class']=$cls;
		$_SESSION['dt']=$date;
		$_SESSION['fr']=$from;
		$_SESSION['too']=$to;
		
		include "connect.php";
		
		

		
		
		if($date == '2017-01-03' && $from == 'Mymensingh' && $to == 'Dhaka' && $cls == "Secound Class"){
		?>
		
		    <form>
			<input type="button" value="Train Name: Tista,Secound Class,Car C" onclick="window.location.href='book_car3.php'" / class="btn" >
			</form> 
			<form>
			<input type="button" value="Train Name: Tista,Secound Class,Car D" onclick="window.location.href='book_car4.php'" / class="btn" >
			</form>
			<form>
			<input type="button" value="Train Name: Tista,Secound Class,Car E" onclick="window.location.href='book_car5.php'" / class="btn" >
			</form>
			<?php
			
             }
			 else if($date == '2017-01-04' && $from == 'Mymensingh' && $to == 'Dhaka' && $cls == "Secound Class"){
		?>
		
		    <form>
			<input type="button" value="Train Name: Tista,Secound Class,Car C" onclick="window.location.href='book_car3.php'" / class="btn" >
			</form> 
			<form>
			<input type="button" value="Train Name: Tista,Secound Class,Car D" onclick="window.location.href='book_car4.php'" / class="btn" >
			</form>
			<form>
			<input type="button" value="Train Name: Tista,Secound Class,Car E" onclick="window.location.href='book_car5.php'" / class="btn" >
			</form>
			<?php
			
             }
			 else if($date == '2017-01-04' && $from == 'Dhaka' && $to == 'Mymensingh'&& $cls == "Secound Class"){
		?>
		    <form>
			<input type="button" value="Train Name: Tista,Secound Class,Car C" onclick="window.location.href='book_car3.php'" / class="btn" >
			</form> 
			<form>
			<input type="button" value="Train Name: Tista,Secound Class,Car D" onclick="window.location.href='book_car4.php'" / class="btn" >
			</form>
			<form>
			<input type="button" value="Train Name: Tista,Secound Class,Car E" onclick="window.location.href='book_car5.php'" / class="btn" >
			</form>
			<?php
			
             }
			 else if($date == '2017-01-03' && $from == 'Dhaka' && $to == 'Mymensingh' && $cls == "Secound Class"){
		?>
		    <form>
			<input type="button" value="Train Name: Tista,Secound Class,Car C" onclick="window.location.href='book_car3.php'" / class="btn" >
			</form> 
			<form>
			<input type="button" value="Train Name: Tista,Secound Class,Car D" onclick="window.location.href='book_car4.php'" / class="btn" >
			</form>
			<form>
			<input type="button" value="Train Name: Tista,Secound Class,Car E" onclick="window.location.href='book_car5.php'" / class="btn" >
			</form>
			
			<?php
			 }
			  else if($date == '2017-01-03' && $from == 'Dhaka' && $to == 'Mymensingh' && $cls == "First Class"){
		?>
		    <form>
			<input type="button" value="Train Name: Tista,First Class,Car A" onclick="window.location.href='book_car1.php'" / class="btn" >
			</form> 
			<form>
			<input type="button" value="Train Name: Tista,First Class,Car B" onclick="window.location.href='book_car2.php'" / class="btn" >
			</form>
			<?php
			
             }
			 else if($date == '2017-01-03' && $from == 'Mymensingh' && $to == 'Dhaka' && $cls == "First Class"){
		?>
		    <form>
			<input type="button" value="Train Name: Tista,First Class,Car A" onclick="window.location.href='book_car1.php'" / class="btn" >
			</form> 
			<form>
			<input type="button" value="Train Name: Tista,First Class,Car B" onclick="window.location.href='book_car2.php'" / class="btn" >
			</form>
			<?php
			
             }
			 else if($date == '2017-01-04' && $from == 'Dhaka' && $to == 'Mymensingh'&& $cls == "First Class"){
		?>
		    <form>
			<input type="button" value="Train Name: Tista,First Class,Car A" onclick="window.location.href='book_car1.php'" / class="btn" >
			</form> 
			<form>
			<input type="button" value="Train Name: Tista,First Class,Car B" onclick="window.location.href='book_car2.php'" / class="btn" >
			</form>
			<?php
			
             }
			 else if($date == '2017-01-04' && $from == 'Mymensingh' && $to == 'Dhaka' && $cls == "First Class"){
		?>
		    <form>
			<input type="button" value="Train Name: Tista,First Class,Car A" onclick="window.location.href='book_car1.php'" / class="btn" >
			</form> 
			<form>
			<input type="button" value="Train Name: Tista,First Class,Car B" onclick="window.location.href='book_car2.php'" / class="btn" >
			</form>
			<?php
			
             }
			  else if($date == '2017-01-04' && $from == 'Dhaka' && $to == 'Mymensingh' && $cls == "Extra"){
		?>
		    <form>
			<input type="button" value="Train Name: Tista,Extra Car EX" onclick="window.location.href='book_extra1.php'" / class="btn" >
			</form> 
			<?php
			
             }
			  else if($date == '2017-01-04' && $from == 'Mymensingh' && $to == 'Dhaka' && $cls == "Extra"){
		?>
		    <form>
			<input type="button" value="Train Name: Tista,Extra Car EX" onclick="window.location.href='book_extra1.php'" / class="btn" >
			</form> 
			<?php
			
             }
			 else {
			 echo "         ";
			 echo "<h3>but There is NO Tickets</h3>";
			 }
?>