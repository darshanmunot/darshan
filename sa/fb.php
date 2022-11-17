<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
     <!-- bootstrap css-->
		 <link rel="stylesheet" href="css/bootstrap.min.css">

<!-- font awesome css-->
 <link rel="stylesheet" href="css/all.min.css">
          
 <!-- google font css-->
 <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
          
<!-- custom css-->
<link rel="stylesheet" href="css/custom.css">
<style>
   body {
background-image: url('bg2.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
}
</style>
</head>
<body>
    
</body>
</html>
<?php
include('config.php');
$name=$_POST['t1'];
$email=$_POST['t2'];
$address=$_POST['t3'];
$phone=$_POST['t4'];
$feedback=$_POST['t5'];

$result=mysqli_query($con,"insert into feedbacks values(default,'$name','$email','$address','$phone','$feedback');") or die("Unable to Insert");



$res=mysqli_query($con,"select * from feedbacks  where name='$name';") or die("Unable to Select");


echo"<table border=1 width=60% align=center class='text-white'>";

echo"<tr><th>Id</th><th>Name</th><th>Mail</th><th>Address</th><th>Phone</th><th>Feedback</th></tr>";

while($r=mysqli_fetch_array($res))
{
echo"<tr>";
echo"<td>".$r[0]."</td>";
echo"<td>".$r[1]."</td>";
echo"<td>".$r[2]."</td>";
echo"<td>".$r[3]."</td>";
echo"<td>".$r[4]."</td>";
echo"<td>".$r[5]."</td>";
echo"</tr>";
}
echo '</table>';
echo "<div class='container d-print-none'>
<div class='text-center'>
<a href='home.html' class='btn btn-info fw-bold shadow-lg mt-3'>Back to Home</a></div>
<div>";
?>


