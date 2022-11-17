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

$name=$_POST['t1'];
$address=$_POST['t2'];
$phone=$_POST['t3'];
$email=$_POST['t4'];
$quantity=$_POST['t5'];


$res= mysqli_query($con,"insert into detail values(default,'$name','$address','$phone','$email','$quantity');") or die("Unable to Insert");

$res=mysqli_query($con,"select * from detail where name='$name';;") or die("Unable to Select");

echo"<table border=1 width=60% align=center >";

echo"<tr><th>Id</th><th>Name</th><th>Address</th><th>Phone</th><th>Email</th><th>Quantity</th></tr>";

while($r=mysqli_fetch_array($res))
{
	
echo"<tr>";
echo"<td >".$r[0]."</td>";
echo"<td>".$r[1]."</td>";
echo"<td>".$r[2]."</td>";
echo"<td>".$r[3]."</td>";
echo"<td>".$r[4]."</td>";
echo"<td>".$r[5]."</td>";


echo"</tr>";
}
echo '<span style="color:#AFA;">Thanks !!</span>';
echo "</table><button value=print onclick=a()>Print</button><script>function a(){print();}</script>";

?>