<?php
 
$rowID = 0;
$count = "";
		
    	for ($index=1; $index <=10; $index++) {
		$list ="";
		$TSQL = mysqli_query($con,"SELECT * FROM `tista_c3` WHERE `row` =$index && `d_id`= 1 && `from` = 2 && `to` = 1");
	
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
}

?>
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