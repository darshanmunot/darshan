<?php
include('config.php');

$res=mysqli_query("select * from ground;") or die("Unable to Select");


echo"<table border=1 width=60% align=center>";

echo"<tr><th>Id</th><th>Name</th><th>Mail</th><th>Address</th><th>Phone</th><th>Team</th><th>Date</th><th>Time</th></tr>";

while($r=mysqli_fetch_array($res))
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
echo "</table>";
?>


