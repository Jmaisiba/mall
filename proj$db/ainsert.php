<?php

 $con=mysqli_connect('localhost','root',"");
 
 if(!$con)
 {
	 echo 'Not Connected To Server ';
 }
 if (!mysqli_select_db($con,'projects'))
 {
	 echo 'Database Not Selected';
 }
 $Username = $_POST['username'];
 $Email = $_POST['email'];
 $FirstName = $_POST['firstname'];
 $LastName = $_POST['lastname'];
 $Password = md5($_POST['password']);
 
 $sql="INSERT INTO admin (Username,FirstName,LastName,Email,Password) VALUES ('$Username','$FirstName','$LastName','$Email','$Password')";
 
 if(!mysqli_query($con,$sql))
 {
	 echo 'Not Inserted';
 }
 else
 {
	 echo'Inserted';
 }
 header('location:adminhome.php');
		

 ?>
	 