<html>
<title>Home</title>


    <head>

    <style>
        
        


    </style>
    </head>
<meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />

<link rel="stylesheet" type="text/css" href="index.css">
    </head>
	<html>

<?php


define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME','farming1');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$fname=$_POST['t1'];
$lname=$_POST['t2'];
$email=$_POST['t3'];
$subject=$_POST['t4'];

$res= mysqli_query($con,"insert into message values(default,'$fname','$lname','$email','$subject');") or die("Unable to Insert");



echo "<p> <font color=yellow>Thanks For Your Response!!";

?>