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
</style>
</head>
<body> 
<div class="container mt-5">
	<div class="row justify-content-center">
		<div class="col-md-6">
 <h1 class="text-white mt-5">DELETE FORM HERE: </h1><br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
<h2 class="text-white">ENTER CUSTOMER'S ID:</h2><br>
<input type="number" name="id" placeholder="Enter  ID" required="required"><br><br><br>
<input type="submit" name="submit" class="btn btn-danger" value="DELETE">
<a href="view.html" class="btn btn-info shadow-lg ">Back</a>
</form>
</div>
</div>
</div>
<?php
include('config.php');


if(isset($_POST['submit']))
{

$id=$_POST['id'];

$res=mysqli_query($con,"delete from ground where id=$id;")or die("OOPS SOMETHING WENT WRONG");

echo "<script>alert('RECORD DELETED');window.location='view1.php';</script>";
}
?>
</div>
</body>
</html>