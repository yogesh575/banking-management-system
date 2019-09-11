<?php


session_start();
$conn = mysqli_connect('localhost','root','','bms');
if(!$conn){echo "not connected";
}


	

$sql = "SELECT * FROM customer inner join banking on cid=aid where cid='".$_SESSION['login_user']."'";

		
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	
		


?>

<!doctype html>
<html>
<head>
<style>

  .title{ background-color:#f26f00;
  margin-top:-50px;
	height:200px;
	color:white;
	font-size:30px;
	font-family:arial;


}
	.title h1{
	margin-left:32%;
	padding-top:60px;
			}
	
table{
margin-left:20%;
 margin-top:20px;
	padding:10px;
width:100%;
}
  td { 
font-size:25px;

 }
form input[type='text'],input[type='number']{
outline:none;
border: 2px solid #f26f00;
height:35px;
width:300px;

font-size:25px;
margin:20px;
margin-left:0px;
margin-top:5px;
}
form input[type='submit']{
background-color:#f26f00;
color:white;
width:100px;
height:40px;

border:none;
margin-left:80%;




}



</style>



</head><body><div class="title"><h1>UPDATE PROFILE</h1>  </div>
<form action="updatedata.php" method="post">
<table>
<tr><td>Name</td><td><input type="text" name="name" value="<?php if(isset($row['name'])){echo $row['name'];}?>"></td></tr>
<tr><td>Father name</td><td><input type="text" name="father" value="<?php if(isset($row['father'])){echo $row['father'];}?>" ></td></tr>
<tr><td>Account no</td><td><input type="text" name="ano" value="<?php if(isset($row['ano'])){echo $row['ano'];}?>" ></td></tr>

<tr><td>Phone no</td><td><input type="text" name="mob" value="<?php if(isset($row['mob'])){echo $row['mob'];}?>" ></td></tr>
<tr><td>City</td><td><input type="text" name="city" value="<?php if(isset($row['city'])){echo $row['city'];}?>" ></td></tr>
<input type="hidden" name="id" value="<?php if(isset($row['cid'])){echo $row['cid'];}?>" >


<tr><td><input type="submit"></td></tr>




</table>
</form>               
</body>
</html>

