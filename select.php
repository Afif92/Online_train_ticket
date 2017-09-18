<?php session_start();
if(!isset($_SESSION['user'])) { 
header('location:login.php');

}
?>
<!DOCTYPE html>
<html>
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

<?php 

	 $host='localhost';
	 $user='root';
	 $pass='';
	 $db='onlinetickets';
	 $sql = "SELECT l_name FROM location";
	 $sql1 = "SELECT c_name FROM class WHERE value='1'";
	 $sql2 = "SELECT date FROM date WHERE value= '1'";
	 $con = mysqli_connect($host,$user,$pass,$db);
     $result = mysqli_query($con,$sql2);
	 $result1 = mysqli_query($con,$sql);
	 $result2 = mysqli_query($con,$sql1);
	 $result3 = mysqli_query($con,$sql);
	 	
		
		
        
	 ?> 
	 
	 
	 <table width="200" border="0" align="center">
        <form id="sform" name="sform1" method="post" action="select_train.php">
		<label>Date:</label>
		<?php
		echo"<select name='date'>";
        while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['date'] ."' >" . $row['date'] ." </option> "; 
         }
        echo "</select>";
		
		?> 
		
        <label>From:</label>
		
		<?php
		echo"<select name='from'>";
        while ($row = mysqli_fetch_array($result1)) {
        echo "<option value='" . $row['l_name'] ."' >" . $row['l_name'] ." </option> "; 
         }
        echo "</select>";
		
		?> 
		<label>To:</label>
		<?php
		echo"<select name='to'>";
        while ($row = mysqli_fetch_array($result3)) {
        echo "<option value='" . $row['l_name'] ."' >" . $row['l_name'] ." </option> "; 
         }
        echo "</select>";
		
		?> 
		<label>Class:</label>
		
		<?php
		echo"<select name='class'>";
        while ($row = mysqli_fetch_array($result2)) {
        echo "<option value='" . $row['c_name'] ."' >" . $row['c_name'] ." </option> "; 
		 }
        echo "</select>";
		
	    
		?>
		
		
		<input type="submit" name="submit" id="btnsubmit" value="Submit" class="btn"/>
		</form>
	</table>	
		
	<?php include 'navbar_fragment.php'; ?>
</body>
</html>
