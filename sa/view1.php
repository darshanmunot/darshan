<html>
<head>
		<title>Sports Arena</title>
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
<body>
  <!-- javascript -->
  <script src="js/jquery.min.js"></script>
	  <script src="js/popper.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	  <script src="js/all.min.js"></script>
	</body>
</html>

<?php
include('config.php');

$result = mysqli_query($con,"SELECT * FROM ground") or die("Unable to Select");


echo"<table border=1 width=60% align=center>";

echo"<tr><th>Id</th><th>Name</th><th>Mail</th><th>Address</th><th>Phone</th><th>Team</th><th>Date</th><th>Time</th></tr>";

while($r = mysqli_fetch_array ($result))
{
      echo"<tr>";
echo"<td>".$r[0]."</td>";
echo"<td>".$r[1]."</td>";
echo"<td>".$r[2]."</td>";
echo"<td>".$r[3]."</td>";
echo"<td>".$r[4]."</td>";
echo"<td>".$r[5]."</td>";
echo"<td>".$r[6]."</td>";
echo"<td>".$r[7]."</td>";
echo"</tr>";
}
echo"</table>";
echo"<div class='container d-print-none'>
<div class='text-center'><form class='d-print-none'><input class='btn btn-danger mt-3 '  type='submit' 
value='Print' onClick='window.print()'><a href='view.html' class='btn btn-info fw-bold shadow-lg mt-3'>Back</a></form>
</div>
<div>";
?>

