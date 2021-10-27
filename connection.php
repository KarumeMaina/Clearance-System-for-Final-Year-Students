<?php

$dbServername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="clearance";

$conn=mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
if(mysqli_connect_errno())
{
echo"database connectivity not successful";
	
}
else
{
 echo "Connected to database";	
}
?>