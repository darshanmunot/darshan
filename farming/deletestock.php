<html>
<head>
<link rel="stylesheet" type="text/css" href="index.css">

</head>
<body> 
 
 <h1>DELETE FORM HERE: </h1><br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
<p>ENTER  ID:</p><br>
<input type="number" name="id" placeholder="Enter Employee ID" required="required"><br><br><br>
<input type="submit" name="submit" value="DELETE RECORD">
</form>
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

if(isset($_POST['submit']))
{

$id=$_POST['id'];

$res=mysqli_query($con,"delete from product where id=$id;")or die("OOPS SOMETHING WENT WRONG");

echo "<script>alert('RECORD DELETED');window.location='stock.php';</script>";
}
?>
</div>
</body>
</html>