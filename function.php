<?php 
session_start();
// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'clearance');

	// variable declaration
	$username = "";
	$user_type    = "";

	$errors   = array(); 

	// REGISTER USER
	function register(){
		global $db, $errors;

		// receive all input values from the form
		$username    =  e($_POST['username']);
		$user_type   =  e($_POST['user_type']);
        $password_1  =  e($_POST['password_1']);
		$password_2  =  e($_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { 
			array_push($errors, "Username is required"); 
		}
		
		if (empty($password_1)) { 
			array_push($errors, "Password is required"); 
		}
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

$query = "INSERT INTO user (UserName, UserType, Passsword) 
						  VALUES('$username','$user_type', '$password_1','$password_2')";
				mysqli_query($db, $query);
				$_SESSION['success']  = "New user successfully created!!";
				header('Location: Dashboard.php');
			 
				 
	}

	



	// return user array from their id
	function getUserById($id){
		global $db;
		$query = "SELECT * FROM user WHERE id=" . $id;
		$result = mysqli_query($db, $query);

		$user = mysqli_fetch_assoc($result);
		return $user;
	}



	// escape string
	function e($val){
		global $db;
		return mysqli_real_escape_string($db, trim($val));
	}

	function display_error() {
		global $errors;

		if (count($errors) > 0){
			echo '<div class="error">';
				foreach ($errors as $error){
					echo $error .'<br>';
				}
			echo '</div>';
		}
	}

?>