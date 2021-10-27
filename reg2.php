<?php
session_start();
// adds the menu as part of your page
include('menu.php');
//loads the conection details in your page
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "project");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$regno=$_POST['regno'];
$course=$_POST['course'];
$department=$_POST['department'];
$hostel=$_POST['hostel'];
$school=$_POST['school'];
$password=$_POST['password'];
 
// attempt insert query execution
$sql = "INSERT INTO student (f_name,l_name,regno,course,school,hostel,department,  password) VALUES ('$f_name','$l_name','$regno','$course','$school','$hostel','$department', '$password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>