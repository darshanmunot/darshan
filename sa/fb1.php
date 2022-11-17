<html>
<head>
		<title>HOTFUT</title>
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
		table, th, td {
  border: 1px solid white;
  color: White;
}		
</style>
</head>
</html>

<?php
include('config.php');

$result = mysqli_query($con,"SELECT * FROM feedbacks") or die("Unable to Select");


echo"<table border=1 width=60% align=center>";

echo"<tr><th>Id</th><th>Name</th><th>Mail</th><th>Address</th><th>Phone</th><th>Feedback</th></tr>";

while($r = mysqli_fetch_array ($result))
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
echo'</table>';
echo "<div class='container d-print-none'>
<div class='text-center'>
<a href='view.html' class='btn btn-info fw-bold shadow-lg mt-3'>Back</a></div>
<div>";

?>


