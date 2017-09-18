<?php session_start();
if(!isset($_SESSION['user'])) { 
header('location:login.php');

}
?>
<?php
include "connect.php";
$list="";
$msg ="";
     $date=$_SESSION['dt'];
	 $from=$_SESSION['fr'];
	 $to=$_SESSION['too'];
	 if($date == '2017-01-03'){
		$SQL = mysqli_query($con,"SELECT * FROM `1tista_extra` WHERE `booked`= 0 && `day`= '".$date."' && `from` = '".$from."' && `to` = '".$to."'");
	    }
	   else if($date == '2017-01-04'){
		$SQL = mysqli_query($con,"SELECT * FROM `2tista_extra` WHERE `booked`= 0 && `day`= '".$date."' && `from` = '".$from."' && `to` = '".$to."'");
	    }
		while($row = mysqli_fetch_array($SQL)){
		
		$seat =  $row['seat'];
		
		$seatID = $row['s_id'];
		
		$from= $row['from'];
	    $to= $row['to'];
		$price= $row['price'];
		$list .= "<option value='$seatID'>$seat</option>";
		}
    if(isset($_POST['seat']) && isset($_POST['name'])  && isset($_POST['from']) && isset($_POST['to']) && isset($_POST['price']))
	{
	$seatNo = $_POST['seat'];	
	if($seatNo==1)
	{
	$seatt="A1";
	}
	else if($seatNo==2)
	{
	$seatt="A2";
	}
	else if($seatNo==3)
	{
	$seatt="A3";
	}
	else if($seatNo==4)
	{
	$seatt="A4";
	}
	else if($seatNo==5)
	{
	$seatt="B1";
	}
	else if($seatNo==6)
	{
	$seatt="B2";
	}
	else if($seatNo==7)
	{
	$seatt="B3";
	}
	else if($seatNo==8)
	{
	$seatt="B4";
	}
	else if($seatNo==9)
	{
	$seatt="C1";
	}
	else if($seatNo==10)
	{
	$seatt="C1";
	}
	else if($seatNo==11)
	{
	$seatt="C3";
	}
	else if($seatNo==12)
	{
	$seatt="C4";
	}
	else if($seatNo==13)
	{
	$seatt="D1";
	}
	else if($seatNo==14)
	{
	$seatt="D2";
	}
	else if($seatNo==15)
	{
	$seatt="D3";
	}
	else if($seatNo==16)
	{
	$seatt="D4";
	}
	else if($seatNo==17)
	{
	$seatt="E1";
	}
	else if($seatNo==18)
	{
	$seatt="E2";
	}
	else if($seatNo==19)
	{
	$seatt="E3";
	}
	else if($seatNo==20)
	{
	$seatt="E4";
	}
	
	$name= $_POST['name'];
    $from= $_POST['from'];
	$to= $_POST['to'];
	$price= $_POST['price'];
	$host='localhost';
	$user='root';
	$pass='';
	$db='onlinetickets';
		$con = mysqli_connect($host,$user,$pass,$db);
	

	$db_selected = mysqli_select_db($con, $db);
	
    if($date == '2017-01-03'){
		mysqli_query($con,"UPDATE `1tista_extra` SET `booked`=1,`user_name`='$name' WHERE `s_id`='$seatNo'");
	}
	else if($date == '2017-01-04'){
		mysqli_query($con,"UPDATE `2tista_extra` SET `booked`=1,`user_name`='$name' WHERE `s_id`='$seatNo'");
	    }
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
	<?php 
	 $userName=$_SESSION['user'];
	 $phn=$_SESSION['pno'];
	 $date=$_SESSION['dt'];
	 $from=$_SESSION['fr'];
	 $to=$_SESSION['too'];
	 $cls=$_SESSION['class'];
	 
	 if($date == '2017-01-03'){
		$pr = mysqli_fetch_array(mysqli_query($con,"SELECT price FROM 1tista_extra WHERE s_id='1'"));
    
	 }
	else if($date == '2017-01-04'){
		$pr = mysqli_fetch_array(mysqli_query($con,"SELECT price FROM 2tista_extra WHERE s_id='1'"));
	    }
	 
	 $pr['price'];
	 $price=$pr['price'];
	
	
	include 'navbar_fragment.php'; ?>
	<center><h1>Book Your Seat</h1></center>
	<div class="container">
	    <div class="infoform">
		<form id="booking" action="book_extra1.php" method='POST' class='form'>
	    <fieldset>
		<label>Class:</label>
		<input type="text" name="class" value="<?php echo "$cls" ?>" />
		<br/><br/>
		
		<label>Select Seat:</label>
		<select name="seat">
			<?php
				echo $list;
		    ?>
		</select>
		<br/>
		<label>Name:</label>
		<input type="text" name="name" value="<?php echo "$userName" ?>" />
		<br/>
		<label>Phone Number:</label>
		<input type="text" name="phone" value="<?php echo "$phn" ?>" />
		<label>From:</label>
		<input type="text" name="from" value="<?php echo "$from" ?>" />
		<br/><br/>
		<label>To:</label>
		<input type="text" name="to" value="<?php echo "$to" ?>" />
		<br/><br/>
		<br/>
		<label>Price:</label>
		<input type="text" name="price" value="<?php echo "$price" ?>" />
		<br/><br/>
		<br/><br/>
		<button class="btn btn-success" type="submit" value='Book'> BOOK </button>
		<br/><br/> 
		</fieldset>
	    </form>
		</div>
		<div class="space"></div>
		<?php $rowID = 0;
$count = "";
		
    	for ($index=1; $index <=10; $index++) {
		$list ="";
		if($date == '2017-01-03'){
		$TSQL = mysqli_query($con,"SELECT * FROM `1tista_extra` WHERE `row` =$index && `day`= '$date' && `from` = '$from' && `to` = '$to'");
	    
		}
	   else if($date == '2017-01-04'){
		$TSQL = mysqli_query($con,"SELECT * FROM `2tista_extra` WHERE `row` =$index && `day`= '$date' && `from` = '$from' && `to` = '$to'");
	    
	    }
    	while($Trow = mysqli_fetch_array($TSQL)){
		$color = '#009999';
		$seatID = $Trow['s_id'];
		$rowNO = $Trow['row'];
		$seat =  $Trow['seat'];
		$name= $Trow['user_name'];
		$booked =  $Trow['booked'];
		$from= $Trow['from'];
		$to= $Trow['to'];
		$price= $Trow['price'];
		if($booked ==1){
			$color = '#bf0c14';
		}
        $list .= "
		<td style='background-color: $color'>
		$seat
	    </td>";
		}
	$count .= 
	"<tr class='row$index'>
	$list
	</tr>";
} ?>
<div class="seatplan">
        <table class="ex1" border="10" width=300 height=110>
		<tr>
         <td class="refresh">Colors : </td>  <td class="green">Available Color</td>	<td class="red">Booked Color</td>		
		</tr>
		<tr ">
         <td width="58">Door</td><td></td><td class="">Door</td>		
		</tr>
		</table>
     	<table border="2" width=300 height=500>
		<?php
			echo $count;
		?>
		</table>
</div>
	</div>

	<?php include 'navbar_fragment.php'; ?>
</body>
</html>