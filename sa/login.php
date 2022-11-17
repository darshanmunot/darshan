
<?php
session_start();   
if(isset($_POST['check']))    
{
$username="yuvraj";   
$password="123";       
if($_POST['username']==$username && $_POST['password']==$password)   
{
$_SESSION['username']=$username;    
header('location:view.html');
}
else
{
echo "<p> <font color=red> Wrong Username or Password !!!!</font> </p>";
}
}
?>

<html>
<head>

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

<?php if(isset($err)){ echo $err; } ?>      

<div class="mt-5 mb-3 text-center" style="font-size:30px;"> 
        <i class="fas fa-futbol text-white"></i>
        <span class="text-white">Sports Arena</span>
    </div>
    <h1 class="text-center text-white" style="font-size:20px;">Admin Login</h1>
    <div class="container ">
        <div class="row justify-content-center mt-3">
            <div class="col-sm-6 col-md-4">
                <form action=" " style="padding:20px;" method="POST">
                    <div class="form-group">
                        <i class="fas fa-user text-white"></i><label for="email" class="fw-bold text-white" style="padding-left:3px;">Username</label>
                        <input type="text" class="form-control mt-1" placeholder="Enter Username" required="required" name="username">
                    </div>
                    <div class="form-group">
                        <i class="fas fa-key text-white"></i><label for="pass" class="fw-bold text-white mt-2" style="padding-left:3px;">
                        Password</label><input type="password" class="form-control mt-1" placeholder="Password" 
                        required="required" placeholder="Enter Password" name="password" id="myInput">
                        <input type="checkbox"class="mt-3 me-1 "onclick="myFunction()"><label for="password" class="text-white">Show Password</label> 
                    </div>
                    <button type="submit" name="check" class="btn btn-outline-danger mt-3 fw-bold w-100 shadow-sm">Login</button>
                </form>
                <div class="text-center">
                    <a href="home.html" class="btn btn-secondary shadow-lg mt-3">Back to Home</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        function myFunction() {
          var x = document.getElementById("myInput");
           if (x.type === "password") {
               x.type = "text";
           } else {
               x.type = "password";
           }
           }
    </script>

</body>
</html>
