<?php
session_start();
// adds the menu as part of your page
//include('menu.php');
//loads the conection details in your page
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include ('connection.php');
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 error_reporting (0);
// Escape user inputs for security
$username=filter_input(INPUT_POST, 'username');
 
$password=$_POST['password'];

$password2=$_POST['password2'];
 
// attempt insert query execution
 switch ($username) {
 	case 'admin':
 		# code...
 	$query = "INSERT INTO admin (username,  password , password2) VALUES ('$username',   '$password' ,'$password2' )";

if(mysqli_query($conn, $query)){
    echo "Records added successfully.  " ;
    header("location:adduser.php");
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}
 		break;
 		case 'dos':

 	 $query = "INSERT INTO  login_dos (username,  password) VALUES ('$username',   '$password')";
if(mysqli_query($conn, $query)){
    echo "Records added successfully.  " ;
    header("location:adduser.php");
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}
  
 			break;
 			case 'registrar':
 				# code...
 			 $query = "INSERT INTO  login_registrar (username,  password) VALUES ('$username',   '$password')";
if(mysqli_query($conn, $query)){
    echo "Records added successfully.  " ;
    header("location:adduser.php");
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}
 				break;
 				case 'finance':
 					# code...
 				 $query = "INSERT INTO  login_finance (username,  password) VALUES ('$username',   '$password')";
if(mysqli_query($conn, $query)){
    echo "Records added successfully.  " ;
    header("location:adduser.php");
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}
 					break;
 					case 'health':
 						# code...
 					 $query = "INSERT INTO  login_health (username,  password) VALUES ('$username',   '$password')";
if(mysqli_query($conn, $query)){
    echo "Records added successfully.  " ;
    header("location:adduser.php");
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}
 						break;
 						case 'library':
 							# code...
 						 $query = "INSERT INTO  login_library (username,  password) VALUES ('$username',   '$password')";
if(mysqli_query($conn, $query)){
    echo "Records added successfully.  " ;
    header("location:adduser.php");
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}
 							break;
 							case 'food':
 								# code...
 							 $query = "INSERT INTO  login_food (username,  password) VALUES ('$username',   '$password')";
if(mysqli_query($conn, $query)){
    echo "Records added successfully.  " ;
    header("location:adduser.php");
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}
 								break;
 								case 'hod':
 									# code...
 								 $query = "INSERT INTO  login_hod (username,  password) VALUES ('$username',   '$password')";
if(mysqli_query($conn, $query)){
    echo "Records added successfully.  " ;
    header("location:adduser.php");
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}
 									break;
 									case 'residence':
 										# code...
 									 $query = "INSERT INTO  login_residence (username,  password) VALUES ('$username',   '$password')";
if(mysqli_query($conn, $query)){
    echo "Records added successfully.  " ;
    header("location:adduser.php");
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}
 										break;
 										case 'ict':
 											# code...
 										 $query = "INSERT INTO  login_ict (username,  password) VALUES ('$username',   '$password')";
if(mysqli_query($conn, $query)){
    echo "Records added successfully.  " ;
    header("location:adduser.php");
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}
 											break;
 											case 'sports':
 												# code...
 											 $query = "INSERT INTO  login_sports (username,  password) VALUES ('$username',   '$password')";
if(mysqli_query($conn, $query)){
    echo "Records added successfully.  " ;
    header("location:adduser.php");
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}
 												break;
 	
 	default:
 		throw new Exception("Error Processing Request", 1);
 		
 		break;
 }


 
// close connection
mysqli_close($conn);
?>