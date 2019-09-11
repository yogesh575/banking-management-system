<?php



$conn = mysqli_connect('localhost','root','','bms');
if($conn){echo "connected";
}
else{ echo "not connected";}

	
	
$add=$_POST['add'];
	

$sub=$_POST['sub'];
echo $_POST['id'];


	$sql = "SELECT * FROM customer  where cid='".$_POST['id']."'";
	$result = mysqli_query($conn, $sql);
		$Oldrow = mysqli_fetch_assoc($result);
		echo $Oldrow["balnce"];
	 $Oldrow["balnce"]=  $Oldrow["balnce"] + $add ;
	 $Oldrow["balnce"]= $Oldrow["balnce"] - $sub ;

	echo $Oldrow["balnce"];
	
	 

 

	//$qry="update banking SET balance='".$Oldrow["balance"]."' WHERE aid='".$Cid."'";
	if($sub){
		
	
	$sql="update customer set balnce='".$Oldrow["balnce"]."' where cid='".$_POST['id']."'";
	$qry="INSERT INTO history (amount,balance,cid,type) values ('".$sub."','".$Oldrow["balnce"]."','".$_POST['id']."','Withdraw')";
	}
	else if($add){
	
		$sql="update customer set balnce='".$Oldrow["balnce"]."' where cid='".$_POST['id']."'";
		$qry="INSERT INTO history (amount,balance,cid,type) values ('".$add."','".$Oldrow["balnce"]."','".$_POST['id']."','Deposit')";
	}
	else{
		echo "wrong";
	}
	

	
	if(mysqli_query($conn,$qry))
	{mysqli_query($conn,$sql);
	 ?><script>
		window.alert("your balance ia updated");</script>
		
	<?php header("location:downlaod.php");}
	else { echo mysqli_error($conn);}

?>