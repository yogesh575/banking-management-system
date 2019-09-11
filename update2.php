<?php



$Del=$_POST["del"];
echo $Del;
$conn = mysqli_connect('localhost','root','','bms');
if($conn){echo "connected";
}
else{ echo "not connected";}

	

	$sql="Delete from customer WHERE id='".$Del."'";	
		
if(mysqli_query($conn,$sql))
		{?><script>
			window.alert('Data updated sucessfully');	</script>
		<?php }
		else{
			echo "error".$sql;
		}
	







?>