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
                
            </ul>
    </div>
<?php
    session_start();
    
// remove all session variables
session_unset();

// destroy the session
session_destroy();
    echo "Bye! Thank you for chosing RHMS";
?>
        <div class="footer"></div>
    </div>
</body>
</html> 