<?php
 
$conn = pg_connect("host=localhost port=5432 dbname=farm user=postgres password=1950");
if (!$conn) {
 echo "An error occurred";
 exit;
}

$myusername=$_GET['username'];

$mypassword=$_GET['password'];

echo "$myusername";

 
$result = pg_query($conn, "SELECT * FROM userd where username='$myusername' and password='$mypassword';");
if(pg_num_rows($result) != 1) { 
 echo "An error occurred.\n";
 }
else
echo "$myusername logged in"; 
ini_set('display_errors', 1);
?>
