<?php



$conn = mysqli_connect('localhost','root','','bms');
if($conn){echo "";
}
else{ echo "not connected";}

$sql = "SELECT * FROM customer inner join banking on cid=aid ";

$result = mysqli_query($conn, $sql);

 echo'<!doctype html><html><head>
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
	
table{		width:100%;;
			
		
		padding:20px;
		margin:auto;
	
	
		 font-size:20px;

}
 table th{  font-size:25px;  
		height:60px;
			background-color:grey;
			color:white;
			
 }
table td{
	height:50px;
	 background-color:#eee;
 text-align:center;}
 
 
 
button {
background-color:red;
color:white;
width:100px;
height:40px;
border-radius:5px;
border:none;

}

</style></head></body><body><div class="title"><h1>DELETE ACCOUNT</h1>  </div>';
if (mysqli_num_rows($result) > 0) {
   echo'<form action="deletedata.php" method="post"><table><tr><th>id</th><th>name</th><th>father name</th><th>account type</th>
	<th>account no</th><th>mobile no</th><th>city</th><th>Delete</th></tr>';
    while($row = mysqli_fetch_assoc($result)) {
        echo  '<tr><td>'.$row["cid"].'</td>'; 
        echo  '<td>'.$row["name"].'</td>';
        echo  '<td>'.$row["father"].'</td>';
        echo  '<td>'.$row["atype"].'</td>';
        echo  '<td>'.$row["ano"].'</td>';
        echo  '<td>'.$row["mob"].'</td>';
        echo  '<td>'.$row["city"].'</td>';
       
       	echo '<td><button type="hidden" name="del"  value="'.$row["cid"].'">delete</td></form> </td></tr><br>';
		 
	
    }
} else {
    echo "0 results";
}



?>


	






























