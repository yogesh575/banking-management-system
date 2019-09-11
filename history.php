<?php


session_start();
$user = $_SESSION['login_user'];
if($user==true){}
else{
	
header('location:login.php');}

$conn = mysqli_connect('localhost','root','','bms');
if($conn){echo "";
}
else{ echo "";}


$sql = "SELECT * FROM history where cid='".$_SESSION['login_user']."'";
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
	.passbook{position:absolute;
		top:40%;
		
		width:100%;
	
		
	}
	 nav ul li a{ color:black;
 padding:10px;
 float:left ;
 display:block;
 text-align:center;
 font-size:25px;
 text-decoration:none;
 margin-left:10px;	

 
 
		}
  nav ul li a:hover{ background:#f26f00;} 
nav ul li:hover a{ color:white;}
table{		width:70%;;
			height:600px;	
		border:1px solid #f26f00;
		padding-left:20px;
		padding-top:40px;
		padding-bottom:20px;
		box-shadow:10px 10px rgba(0,0,0,0.5);
		 font-size:25px;

}
	
	th{background-color:#f26f00;
	color:white;
	padding:10px;}
	td{padding:10px;
		}
	table{		width:60%;
			margin:auto;	
	

		
		 font-size:25px;

}
.btn{
background-color:#f26f00;
text-decoration:none;
color:white;
padding:10px;
width:100px;
height:40px;
border-radius:5px;
border:none;

}</style></head>
   
   
   
   <body><div class="title"><h1>Payment History</h1>  </div>
   	<nav>
		<ul>
			<li><a href="customer.php">Home</a></li>
			
			
			<li><a href="update1.php">Update</a></li>
			<li><a href="history.php">History</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
		</nav>
   <div class="passbook"><table>

   <?php if($result){?>
	<table><tr><th>Transaction Id: </th><th>Transaction type </th><th>Amount </th><th>Balance </th><th>Time </th></tr>
	<?php while($row = mysqli_fetch_assoc($result)){?>
		
		        <tr><td><?php echo  $row["hid"];?></td>
		       <td><?php echo $row["type"];?></td>
		       <td><?php echo $row["amount"];?></td> 
		       <td><?php echo $row["balance"];?></td>
		      <td><?php echo $row["time"];?></td></tr>
			  
		
		
<?php }
echo"<tr><td><form action='history-pdf.php' method='post'><input type='submit' value='print' class='btn'></form></a></td><td><a href='customer.php' class='btn'>back</a></td></tr></table></div>";}
else{
	echo mysqli_error($conn);
}
?>
	
