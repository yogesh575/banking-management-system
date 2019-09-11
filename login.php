<?php
 $conn = mysqli_connect('localhost','root','','bms');
if($conn){echo "";
}
else{ echo "not connected";}
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['id'];
      $mypassword = $_POST['password']; 
      
      $sql = "SELECT * FROM customer WHERE cid = '".$myusername."' and password = '".$mypassword."'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result);
 
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        // session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: customer.php");
      }else {
         $error = "!!!!Your Login Name or Password is invalid!!!!";
      }
   }
?>	
<!doctype html>	
<html>
<head>  <title> Banking</title>
<style>

body{ margin:0px;
padding:0px;
background-image:url('vanua.jpg');
background-size:cover;

}
.title  {position:absolute; 
background-color:#F26F00;
height:200px;
width:100%;
color:white;
font-family:arial;
	margin-top:0%;


}
.title h1 {

color:white;
font-family:arial;
font-size:60px;
margin-left:30%;

}
.formbox { position:absolute; 
width:50%;
top:30%;
left:22%;
height:400px;

box-shadow:0 15px 40px rgba(0,0,0.5);
	background:#fff;
	
}

.left { position:absolute; 
width:50%;

height:400px;
}

.left img { 
width:300px;

height:400px;
}


.right { position:absolute; 
width:100%;
top:10%;
left:55%;
height:400px;


box-sizing:border-box;

	
}
.right p{
	margin:0px;
	padding:0px;
	font-weight:bold;
	color:#F26F00;
}
.right input{
	margin-bottom:20px;
}
.right input[type="text"],.formbox input[type="password"]{
border:none;
border-bottom:2px solid #F26F00;
	outline:none;
	height:40px;
}

.right input[type="submit"],a{
	border:none;
	outline:none;
	height:40px;
	width:80px;
	color:#fff;
	text-decoration:none;
	padding:none;
	background:#F26F00;
	cursor:pointer;
}


.right a{
	color:#262626;
	fony-size:12px;
	font-weight:bold;
}.


</style></head>
<body>
<div class="title"><h1>SELF HELP BANK</h1>	</div>
<div class="formbox">
<div class="left"><img src="bank.jfif"></div>

<div class="right"><form action="" method="post">

		<p>Email Id</p><br>
			<input type="text" name="id" value=""/><br><br>
				<p>Password</p><br>
				<input type="password" name="password" value""/ required><br><br>
				<input type="submit" value="Login">
				<a href="form.html">Signup</a>

				
				
				
				</form>











               <span style="color:red;font-size:25px;"><?php if(isset($error)){echo $error;} ?></span></div></div>
					
           
				
         
			
      

   </body>
</html>
