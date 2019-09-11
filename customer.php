
<?php

session_start();

$user = $_SESSION['login_user'];
if($user==true){}
else{
	
header('location:login.php');}
$conn = mysqli_connect('localhost','root','','bms');
if($conn){echo "";
}
else{ echo "not connected";}


$sql = "SELECT * FROM customer inner join banking on cid=aid where cid='". $_SESSION['login_user'] ."'";

$result = mysqli_query($conn,$sql);



if (isset($_SESSION['login_user'])) {?> 
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
		.formbox{
				width:100%;;
			height:700px;
			margin-left:15%;
			margin-top:50px;

		
	
	}
	nav { width:100%;
background-color:#eee;
overflow:auto;
}
	

nav ul { list-style:none;
         margin:0px;
     line-height:50px;
padding:0px;
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
 table th{  font-size:30px;  
			padding:10px;
			background-color:#f26f00;
			color:white;
 }
 .formbox input[type="submit"]{
background-color:#f26f00;
color:white;
width:100px;
height:40px;
border-radius:5px;
border:none;

}
.formbox input[type="number"]{
outline:none;
border: 2px solid #f26f00;
height:35px;
width:300px;
border-radius:5px;
font-size:25px;
margin:20px;
margin-left:0px;
margin-top:5px;
}
</style></head>
   
   
   
   <body><div class="title"><h1>ACCOUNT PROFILE</h1>  </div>
   	<nav>
		<ul>
			<li><a href="customer.php">Home</a></li>
			
			
			<li><a href="update1.php">Update</a></li>
			<li><a href="history.php">History</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
		</nav>
   <div class="formbox"><table><form action="dsiplay.php" method="post">
 
<?php
if($result){ while($row = mysqli_fetch_assoc($result) ){
	
		echo  '<th>Customer Details</th>';
        echo  '<tr><td>Customer Id:  '.$row["cid"].'</td></tr>'; 
        echo  '<th>Personal Details</th>';
        echo  '<tr><td>Customer name:  '.$_SESSION['login_user'].'</td></tr>';
        echo  '<tr><td>Father Name : '.$row["father"].'</td></tr>';
		echo  '<th>Banking Details</th>';
        echo  '<tr><td>Account Type: '.$row["atype"].'</td></tr>';
        echo  '<td>Account No.: '.$row["ano"].'</td></tr>';
		echo  '<tr><th>Contact Details</th>';
        echo  '<tr><td>Mobile No. : '.$row["mob"].'</td></tr>';
        echo  '<tr><td>City  : '.$row["city"].'</td></tr>';
        echo  '<tr><td>balance  : '.$row["balnce"].'</td></tr>';
        echo  '<tr><td><input type="hidden" name="id" value="'.$row["cid"].'"></td></tr>';
        echo  '<tr><td style="margin-left:10px";>Deposit<input type="number" name="add" ></td></tr>';
		echo '<tr><td>Withdraw<input type="number" name="sub" ></td></tr>';


echo '<tr><td><input type="submit" name="submit" ></td></tr></form></table></div></body></html>';

		 
	
    }
}
else{echo "errrr";}
} else {	
    echo mysqli_error($conn);
}

?>

