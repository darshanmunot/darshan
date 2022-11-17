<html>
<body>
<style>
 body{
    margin: 0;
    padding: 0;
      background-image: url('h3.jpg');

    background-size: cover;
    background-position: center;
}

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

$result = mysqli_query($con,"select * from message") or die("Unable to Select");


echo"<table border=1 width=60% align=center>";

echo"<tr><th>Id</th><th>First Name</th><th>Last Name</th><th>Email ID</th><th>Feedback</th>";

while($r = mysqli_fetch_array ($result))
{
      echo"<tr>";
echo"<td>".$r[0]."</td>";
echo"<td>".$r[1]."</td>";
echo"<td>".$r[2]."</td>";
echo"<td>".$r[3]."</td>";
echo"<td>".$r[4]."</td>";
echo"</tr>";
}
?>

