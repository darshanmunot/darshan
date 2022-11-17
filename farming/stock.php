<html>
<head>

<link rel="stylesheet" type="text/css" href="index.css">

</head>
<body>
<style>

		table, th, td {
  border: 1px solid white;
  color: White;
}
</style>
</body>
</html>

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

$result = mysqli_query($con,"SELECT * FROM product") or die("Unable to Select");


echo"<table border=1 width=60% align=center>";

echo"<tr><th>Prd_Id</th><th>Prd_Name</th><th>Prd_Price</th><th>Quantity</th></tr>";

while($r = mysqli_fetch_array ($result))
{
      echo"<tr>";
echo"<td>".$r[0]."</td>";
echo"<td>".$r[1]."</td>";
echo"<td>".$r[2]."</td>";
echo"<td>".$r[3]."</td>";
echo"</tr>";
}
?>

