<?php
$message="";
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","projects");
	$result = mysqli_query($conn,"SELECT * FROM admin WHERE Username='" . $_POST["username"] . "' and Password = '". md5($_POST["password"])."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		$message = "Invalid Username or Password!";
	} else {
		$message = "You are successfully authenticated!"; header('location:adminhome.php');
		
	}
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="eg.css" />
<div class="body-content">
  <div class="module">
  </head>
  <body>
<form name="frmUser" method="post" action="" enctype="multipart/form-data" autocomplete="off">



	<div class="message"><?php if($message!="") { echo $message; } ?></div>
		
			<h1>Admin Login!</h1>
	 
	 
	 Username: <input type="text" placeholder="User Name" name ="username" required>
	        <br/>
	 Password: <input type="password" style=md5 placeholder="password" name ="password" autocomplete="new-password" required>
	        <br/>
			<input type="submit" value="Login" class="btn btn-block btn-primary" >
			<p>
			 <input type ="checkbox"  name="rememberme"/>  Remember Me 
            </p>		
            <p>			
			Not yet a member? <a href="aindex.php" style="color:yellow;">Sign up</a>
			</p>
			
			
	</form>
	</body>
	</html>