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
				
            <li><a class="special" href="log_out.php">log out</a></li>
            </ul>
    </div>
    <div class="main">
    <h1>Welcome! We are happy to have you using our services </h1>  <?php 
    session_start();
    echo $_SESSION['user']; 
    // echo  $_SESSION['tenantID'];
    
    ?><br>
	
        <h2> <font color="white"> Checking on your rent progress? </font></h2>
	<style>
	.button2 {
    background-color: #008CBA ;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
<p>please click below </p>

        <a  href="rent.php" class="button">  <font color="orange">Rent Progress</font></a>

    <h2> <font color="white"> Got any issues you'd like to be solved? Feel free to tell us what it is.</font></h2>
	
	<style>
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<h3>Complaint Report Form</h3>

    <div class="container">
      <form method="post">
    <label for="fname">Full Names</label>
    <input type="text" id="fname" name="fullnames" placeholder="Your full names..">

    <label for="house_no">House number</label>
    <input type="text" id="house_no" name="house_no" placeholder="Your house number..">

    <label for="problem">Choose where problem is</label>
    <select id="problem" name="problem">
      <option value="livingroom">Living Room</option>
      <option value="bedroom">Bedroom</option>
      <option value="bathroom">Bathroom</option>
      <option value="other">Other</option>
    </select>
    
    <label for="urgency">How urgent is it</label>
    <select id="urgency" name="urgency">
    <option value="immediate">Immediate</option>
    <option value="soon">Soon </option>
    <option value="not_urgent">Not Urgent</option>
      </select>
    <label for="message">Message to manager</label>
    <textarea id="subject" name="subject" placeholder="Describe the message but remember to be nice.." style="height:200px"></textarea>

    <input type="submit" name='submit' value="Submit">
  </form>
        </div>
    <?php
        include ("config.php");
    if(isset($_POST['submit'])){
    $sql = "INSERT INTO reports (reportID,tenantID,houseID,category,importance,msg) VALUES ('NULL','". $_SESSION['tenantID']."','".$_POST['house_no']."','".$_POST['problem']."','".$_POST['urgency']."','".$_POST['fullnames']." : ".$_POST['subject']."')";

if ($conn->query($sql) === TRUE) {
    echo "Report has been successully sent";
} else {
    echo "Error: Report was not sent";
}
    }
?>    
    <ul>
        <li><a href="log_out.php">log out</a></li>
    </ul>
       
        </div>
    </div>
	
</body>
</html> 