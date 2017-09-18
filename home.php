<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link href="css/bootstrap.css" rel="stylesheet" />
	<link href="css/bootstrap-theme.css" rel="stylesheet" />
	<link href="css/main.css" rel="stylesheet" />
	
<table border="1px" cellspacing="0" align="center">
	
<tr >
		<td height="100px" width="900px">
						<div style="max-width:9000px" >
						  <img class="mySlides" src="tista1.jpg" align="middle" style="width:200%" height:10%>
						  <img class="mySlides" src="tista3.jpg" align="middle" style="width:200%"height:10%>
						  <img class="mySlides" src="tista2.jpg" align="middle" style="width:200%"height:10%>

						</div>
				<script>
				var myDisplay = 0;
				slider();

				function slider() {
					var i;
					var x = document.getElementsByClassName("mySlides");
					for (i = 0; i < x.length; i++) {
					   x[i].style.display = "none";  
					}
					myDisplay++;
					if (myDisplay > x.length) {myDisplay = 1}    
					x[myDisplay-1].style.display = "block";  
					setTimeout(slider, 3000);
				}
				</script>
       </td>
	</tr>
	


</table>
</head>

<body>
	
	<?php include 'navbar_fragment.php'; ?>
   <center><marquee align="middle" width="80%" behavior="scroll" ><h1 style="font-family:courier">Buy tickets of Tista train anytime from anywhere.Enjoy nice journey. </marquee></center>
	</h1>
	

	
<div class="des">
<div class="a">
<h4>Why buy tickets from us?</h4><br>
<ol type="i">
 <li>Buy tickets sitting at home</li>
 <li>It is so easy</li>
 
</ol> 
</div>
<div class="b">
<h4>"Welcome To Train Ticket Seller"</h4><br>
<p>We are selling Dhaka-Mymensingh and Mymensingh-Dhaka Train tickets.Now all the tickets of Tista Expless is avaiable.Stay with us and buy tickets online.</p>
</div>	



</body>
</html>
