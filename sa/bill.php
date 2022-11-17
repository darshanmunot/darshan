<?php
include('config.php');
$a=mysqli_query($con,"select * from ground1;");
$b=pg_fetch_array($a);
for($i=0;$i<$b;$i++)
{
echo"ID<br>".$b['id']."<br>Name<br>".$b['name']."<br>email<br>".$b['email']."<br>address<br>".$b['address'];
}
?>
