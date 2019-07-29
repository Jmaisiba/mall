
<html>
<head>
<title>Inserting data using PHP and MySQL</title>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
  <div class="module">
</head>  
<link rel="stylesheet" type="text/css" href="eg.css" />
<body>
     <form method="post" action="ainsert.php"  method="post" enctype="multipart/form-data" autocomplete="off">
	 <div class="alert alert-error"></div>
	
	 <h1>Create an account
	      Administrator</h1>
	 
	 
	 FirstName: <input type="text" placeholder="first name" name ="firstname" required>
	        <br/>
	 LastName: <input type="text" placeholder="last name"name ="lastname" required>
	        <br/>
	Username: <input type="text" placeholder="username "name ="username"required>
	        <br/>
	Email: <input type="text" placeholder="email"name ="email"required>
	        <br/>
	Password: <input type="password" placeholder="password"name ="password" autocomplete="new-password" required>
	        <br/>
	
			
			<input type="submit" value="Register" class="btn btn-block btn-primary" >
			<p>
			Already a member? <a href="adminlogin.php" style="color:pink;">Sign in</a>
			</p>
			
	</form>
	
	
</body>
</html>

