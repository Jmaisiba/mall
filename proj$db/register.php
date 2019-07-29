<!DOCTYPE html/>
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
                <li><a href="index.php">home</a></li>
                <li><a href="login.php">sign in</a></li>
                <li><a href="about us.php">about us</a></li>
                <li><a href="contact us.php">contact us</a></li>
            </ul>
        </div>
        <h1>Register</h1>
        <?php

    include ("config.php"); 
 if(isset($_POST['submit'])){
        $sql = "INSERT INTO tenants (tenantID, user, pass, email) VALUES ('NULL', '".$_POST["username"]."','".$_POST["password"]."','".$_POST["email"]."')";
     
     if(mysqli_query($conn, $sql)){
         echo "new record";
     }else{
         echo "User detail must be wrong";
     } 
    }else{ echo "Ready to be a member";  } 
 ?>
    <div class="register">
        <form class="form" method="post">
            <lable>Username  </lable><br />
            <input  type="text" name="username" id="username" placeholder=Username><br/>
            
            <lable>Password  </lable><br/>
            <input type="password" name="password" id="password" placeholder="Password"><br/>
            
            <label id="first">Email </label><br/>
            <input type="text" name="email" placeholder="johnsmith@gmail.com"><br/>
            
            <input class="submit" type="submit" value="Submit" name="submit"><br />
        </form>
        <a href="login.php">Login</a>
     
    </div>
        <div class="footer"></div>
        </div>
</body>
</html>