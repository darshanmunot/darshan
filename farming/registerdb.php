<?php

define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME','farming');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);



$myFname=$_GET['Fname'];

$myLname=$_GET['Lname'];

$myemail=$_GET['Email'];

$myusername=$_GET['username'];

$mypassword=$_GET['password'];


$res=mysqli_query($con,"INSERT INTO userd VALUES (default, '$myFname','$myLname','$myemail','$myusername','$mypassword');") or die("Unable to Insert");
	
echo "<br><br><br>Your Login ID  $myusername Created Sucessfully";






?>
