<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="eg.css">

    <title>Housing Rentals</title>
    
</head>
<body>
  
<div class="wrapper">
    <div class="header">
        <ul class="nav" >
                <li><a href="login.php">sign in</a></li>
                
                <li><a href="contact us.php">contact us</a></li>
            </ul>
    </div>
    <div class="main">
        <h1>Login</h1>
        <form method="post"> 
            <p name="id"></p>
        <label id="first">Username :</label><br/>
        <input type="text" name="username"><br/>

        <label id="first">Password :</label><br/>
        <input type="password" name="password"><br/>


        <button type="submit" name="log">Login</button>
        </form>
          <?php
   include ("config.php");
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
            $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT tenantID FROM tenants WHERE user = '$myusername' and pass = '$mypassword'";
   
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
          session_start();
//         session_register("myusername");
         $_SESSION['tenantID'] = $row['tenantID'];//storing username
         $_SESSION['user'] = $myusername;//storing username
         $_SESSION['password'] = $mypassword;
          $_SESSION['id']=$row['tenantID'];
          $_SESSION['firstN'] = $_POST['f_name'];
          $_SESSION['lastN'] = $_POST['l_name'];
          $_SESSION['email'] = $_POST['email'];
          
         header("location: welcome_get.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?><br />
        <a href="register.php">sign up</a>
		
		
		
		<p> Are you an administrator?  If so, click the link below</p>
		<li><a href="adminlogin.php">Administrator log in</a></li>
    </div>
    <div class="footer"></div>
</div>
</body>
</html>