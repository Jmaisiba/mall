<?php
session_start();
$_SESSION["favcolor"] = "green";
?>
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
                <li><a href="index.php">home</a></li>
                <li><a href="login.php">sign in</a></li>
                <li><a href="about us.php">about us</a></li>
                <li><a href="contact us.php">contact us</a></li>
                <li><a href="account.php">profile</a></li>
            <li><a class="special" href="log_out.php">log out</a></li>
            </ul>
        </div>
        <div class="main">
     
            
            <div class="container">
               <form method="post">
                   <label >username :</label><br/>
<?php echo "<input type='text' value='".$_SESSION['user']."' 
readonly";?> <br/><br/><p>can't change username</p>
                   
                     <label >password :</label><br/>
<?php echo "<input type='text'  name='password' value='".$_SESSION['password']."' 
";?> <br/><br/>
                   
                   <label >First Name :</label><br/>
<?php echo "<input type='text' name='firstN' value='".$_SESSION['firstN']."' 
";?> <br/><br/>
                   
                   <label >Last Name :</label><br/>
<?php echo "<input type='text' name='lastN' value='".$_SESSION['lastN']."' 
";?> <br/><br/>
                 
                   <label >email :</label><br/>
<?php echo "<input type='text' name='email' value='".$_SESSION['email']."' 
";?> <br/><br/>
                   <input type="submit" name="submit" value="Update">


               </form>
                      <?php

    include ("config.php"); 
 if(isset($_POST['submit'])){
        $sql = "UPDATE `tenants` SET `pass`= '".$_POST['password']."',`f_name`='".$_POST['firstN']."',`l_name`= '".$_POST['lastN']."',`email`='".$_POST['email']."' WHERE `tenantID`= ".$_SESSION['id']." ";
     
     if(mysqli_query($conn, $sql)){
         echo "Records have been updated";
     }else{
         echo "not updated" .mysqli_error($conn);
     } 
    } 
 ?>
            </div>
            
        </div>
        <div class="footer">
        </div>
    </div>
</body>
</html>