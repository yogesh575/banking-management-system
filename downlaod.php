<?php

session_start();

$conn = mysqli_connect('localhost','root','','bms');
if($conn){echo "";
}
else{ echo "not connected";}
$sql = "SELECT * FROM  history order by hid desc  limit 1 ";

$result = mysqli_query($conn,$sql);?>

 <!doctype html><html><head>
  <style>
  *{margin:0;padding:0px;}

  
  
  
  .title{ background-color:#f26f00;
	height:200px;
	color:white;
	font-size:30px;
	font-family:arial;


}
	.title h1{
	margin-left:32%;
	padding-top:60px;
			}
	.payment{position:absolute;
		top:40%;
		
		width:100%;
		
		
	}
	
	table{		width:35%;
			margin:auto;	
		border:1px solid #f26f00;
		padding:20px;
		
		 font-size:25px;

}
input[type="submit"],a{
background-color:#f26f00;
text-decoration:none;
color:white;
padding:10px;
width:100px;
height:40px;
border-radius:5px;
border:none;

}</style></head>
   
   
   
   <body><div class="title"><h1>Payment Details</h1>  </div>
   
   <div class="payment"><table>
<?php
if($result){ while($row = mysqli_fetch_assoc($result) ){?>
	<tr><td>Customer Id </td><td><?php echo $_SESSION['login_user'];?></td></tr>
	<tr><td>Transction Id </td><td><?php echo $row["hid"];?></td></tr>
	<tr><td>Amount </td><td><?php echo $row["amount"];?></td></tr>
	<tr><td>Balance</td><td><?php echo $row["balance"];?></td></tr>
	<tr><td>Date & Time </td><td><?php echo $row["time"];?></td></tr>
	<tr><td>Status </td><td><?php echo $row["type"];}?></td></tr>
	<tr><td><form action='payment-pdf.php' method='post'><input type='submit' value='print'></form></td><td><a href="customer.php" >Back</a></td></tr>
<?php }else {
	echo mysqli_error($conn);
}
	?>
	</table></div></body></html>