
<?php
session_start();   
if(isset($_POST['check']))    
{
$username="darshan";   
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

<link rel="stylesheet" type="text/css" href="login.css">  
</head>
<body>

<?php if(isset($err)){ echo $err; } ?>      

<form method="POST" name="loginauth" target="_self">
	<div class="login-box">
	    <img src="avatar1.jpg" class="avatar">
        <h1>Login Here</h1>
            <form>
            <p>Username: </p> <input type="text" name="username" required=required placeholder="Enter Username"><br><br>
            <p>Password:</p> <input type="password" name="password" required=required placeholder="Enter Username"><br><br>

<input name="check" type="submit" value="Login">

</form>

</body>
</html>
