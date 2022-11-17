<html>
<head>
    <title> Login </title>
    <link rel="stylesheet" type="text/css" href="ex.css">   
</head>
    
	 <link rel="stylesheet" type="text/css" href="ex.css">   
</head>
    <body>
		<form method="POST" action="book.html">
							
				<img src="hotfut.png" width="200" height="80">
						
						
			
		<h3 align="center">
		<font face="cinzel" size="5">
			<a href="login.html">LOGIN</a>
			<a href="abt.html">ABOUT</a>
		
		</font>
	</h3>	
    
        <h1><font face="Times" size="8" color="white">Admin Login</font></h1>
            <form>
            <font face="Times" size="3" color="white">Username:</font><input type="text" name="f1" required=required placeholder="Enter Username"><br><br><br><br>
			
            <font face="Times" size="3" color="white">Password:</font> <input type="password" name="f2"  required=required placeholder="Enter password Password"><br><br><br><br>
           
					
            <input type="submit" name="submit" value="Login">
               
            </form>
        
        
        
    
    </body>
</html>


<?php
if(isset($_POST['submit']))
{
$username=$_POST['f1'];
$passwd=$_POST['f2'];

if($username==admin && $passwd==123)
{
header("location:book.html");
}

else
{
echo"Invalid username and Password";
}
}
?>
