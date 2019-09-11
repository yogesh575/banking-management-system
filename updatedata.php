<?php



$conn = mysqli_connect('localhost','root','','bms');
if(!$conn){echo " not  connected";
}

$Cid=$_POST['id'];
$Cname=$_POST['name'];
$Cfat=$_POST['father'];

$Ano=$_POST['ano'];

$Cmob=$_POST['mob'];

$Ccity=$_POST['city'];

$sql = "UPDATE customer SET cid='".$Cid."',name='".$Cname."',father='".$Cfat."',mob='".$Cmob."',city='".$Ccity."' where cid='".$Cid."'";
$qry = "UPDATE banking SET ano='".$Ano."' where aid='".$Cid."'";
		if(mysqli_query($conn, $qry))
		{
			mysqli_query($conn,$sql)?><script>
			window.alert('Data updated sucessfully');	</script>
		<?php }
		else{
			echo mysqli_error($conn);
		}
		
		
		
?>
