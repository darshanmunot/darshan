<?php

$conn = pg_connect("host=localhost dbname=farm user=postgres");

if (!$conn)
{

echo "Error";
}

else
{
echo "bye";
}

?>
