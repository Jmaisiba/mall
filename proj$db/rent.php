<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="eg.css">

    <title>Rental House Management System</title>
	
</head>
<body>
 <div class="wrapper">
    <div class="header">
        <ul class="nav" >
                
                <li><a href="login.php">sign in</a></li>
                
                <li><a href="account.php">profile</a></li>
            <li><a href="welcome_get.php">Report</a></li>
				
            <li><a class="special" href="log_out.php">log out</a></li>
            </ul>
    </div>
<h3>Rent Progress Form</h3>
<div class="main">
<div class="container">
  <form method="post">
    <label for="fname">Full Names</label>
    <input type="text" id="fname" name="fullnames" placeholder="Your full names..">

    <label for="house_no">House number</label>
    <input type="text" id="house_no" name="house_no" placeholder="Your house number..">

    <label for="check">Check rent status</label>
    <select id="amount" name="check">
      <option value="current_month">Current month</option>
      <option value="last_month">Last month</option>
      
    </select>
    
    <label for="update">Update rent paid</label>
    <input type="int" id="update" name="update" placeholder="Enter amount paid..">


    <label for="receipt">Receipt for updated rental payment</label>
    <textarea id="subject" name="subject" placeholder="Enter the recipt number/ cheque number with details regarding the updated rental payment done.." style="height:200px"></textarea>

    <input type="submit" name="submit" value="Submit">
  </form>
</div>
     <?php
        include ("config.php");
		session_start();
    if(isset($_POST['submit'])){
    $sql = "INSERT INTO rent (rentID, tenantID,itemNo, status, amount, method) VALUES ('NULL','".$_SESSION['id']."','".$_POST['house_no']."','".$_POST['check']."','".$_POST['update']."','".$_POST['fullnames']." : ".$_POST['subject']."')";

if ($conn->query($sql) === TRUE) {
    echo "Report has been successully sent";
} else {
    echo "Error: Report was not sent";
}
    }
?>    
</div>
    </div>
</body>
</html>
