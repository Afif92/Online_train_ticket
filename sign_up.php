<?php session_start(); ?>
<!DOCTYPE html>
<html>
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

<center><h3>User Register</h3></center>
<hr />



<!DOCTYYPE html>
<html>
<head>
</head>
<body>
<form method="POST" action="cheack.php">

		 Username : <input type="text" name="user_name" required 1 placeholder="Username Name"><br>
		<br>
		Full Name : <input type="text" name="full_name" required 1 placeholder="Full Name"><br>
		<br>

		Date Of Birth : 
		<select name="date">
		<option value="none">Date</option>
		<?php
			for($i=1;$i<32;$i++){
		  echo "<option value= ".$i.">".$i."</option>";
			}
		  ?>
		</select>

		<select name="month">
		  <option value="none">Month</option>
		  <option value="jan">January</option>
		  <option value="feb">February</option>
		  <option value="apr">April</option>
		  <option value="may">May</option>
		  <option value="june">June</option>
		  <option value="july">July</option>
		  <option value="aug">August</option>
		  <option value="sep">September</option>
		  <option value="oct">Octaber</option>
		  <option value="nov">November</option>
		  <option value="dec">December</option>
		</select>

		<select name="year">
		  <option value="none">Year</option>
		  
		<?php
			for($i=1990;$i<2017;$i++){
		  echo "<option value= ".$i.">".$i."</option>";
			}
		  ?>  
		  
		  
		</select>
		 <br>	
		<br>
		Gender : 
		<input type="radio" name="gender" value="Male">Male
		<input type="radio" name="gender" value="Female">Female
		<input type="radio" name="gender" value="Others">Others <br>
		<br>
		Phone : <input type="text" name="phone" required 1 placeholder="Phone"><br>
		<br>
		Email : <input type="text" name="email" required 1 placeholder="Email"><br>
		<br>
		Password : <input type="password" name="password"required 1 placeholder="Password"><br>
		<br>
		Confirm Password : <input type="password" name="c_pass" required 1 placeholder="Enter Password Again"><br>
		<br>

		<input type="submit" name="submit" value="SUBMIT">


</form>
</body>
</html>
