<?php 
	session_start();

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'clearance');

	// variable declaration
	$username = "";
	$user_type    = "";

	$errors   = array(); 

	// call the register() function if register_btn is clicked
	if (isset($_POST['register_btn'])) {
		register();
	}

	// call the login() function if register_btn is clicked
	if (isset($_POST['login_btn'])) {
		login();
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("location: ../login.php");
	}

	// REGISTER USER
	function register(){
		global $db, $errors;

		// receive all input values from the form
		$username    =  e($_POST['username']);
		$usertype   =  e($_POST['usertype']);
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

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password =  ($password_1);//encrypt the password before saving in the database
 
				$query = "INSERT INTO user (UserNamet, UserType, Passsword) 
						  VALUES('$username','$usertype', '$password')";
				mysqli_query($db, $query);
				$_SESSION['success']  = "New user successfully created!!";
				//header('Location: Dashboard.php');
			 
				 
		}

	}

	// return user array from their id
	function getUserById($id){
		global $db;
		$query = "SELECT * FROM user WHERE id=" . $id;
		$result = mysqli_query($db, $query);

		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	// LOGIN USER
	function login(){
		global $db, $username, $errors;

		// grap form values
		$username = e($_POST['username']);
		$password = e($_POST['password']);

		// make sure form is filled properly
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		// attempt login if no errors on form
		if (count($errors) == 0) {
			$password = md5($password);

			$query = "SELECT * FROM user WHERE UserName='$username' AND Password='$password' LIMIT 1";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) { // user found
				// check if user is admin or user
				$logged_in_user = mysqli_fetch_assoc($results);
				if ($logged_in_user['UserType'] == 'admin') {

					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('Location: admin/Dashboard.php');		  
				}
				elseif($logged_in_user['UserType'] == 'Librarian') {
                  $_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('Location: Librarian/Dashboard.php');						
				}
				elseif($logged_in_user['UserType'] == 'Bursa') {
                  $_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('Location: Busar/Dashboard.php');						
				}
				elseif($logged_in_user['UserType'] == 'HoD') {
                  $_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('Location: HoD/Dashboard.php');						
				}
				elseif($logged_in_user['UserType'] == 'DoS') {
                  $_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('Location: DoS/Dashboard.php');						
				}
				elseif($logged_in_user['UserType'] == 'janitor') {
                  $_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('Location: Janitor/Dashboard.php');						
				}
				elseif($logged_in_user['UserType'] == 'medical') {
                  $_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('Location: Medical/Dashboard.php');						
				}
				elseif($logged_in_user['UserType'] == 'Lab') {
                  $_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('Location: Lab/Dashboard.php');						
				}
				elseif($logged_in_user['UserType'] == 'Sport') {
                  $_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";
					header('Location: Sport /Dashboard.php');						
				}
				else{
					$_SESSION['user'] = $logged_in_user;
					$_SESSION['success']  = "You are now logged in";

					header('location: student/Dashboard.php');
				}
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

	function isLoggedIn()
	{
		if (isset($_SESSION['user'])) {
			return true;
		}else{
			return false;
		}
	}

	function isAdmin()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['UserType'] == 'admin' ) {
			return true;
		}else{
			return false;
		}
	}
	function isLibrarian()
	{
		if(isset($_SESSION['user']) && $_SESSION['user']['UserType'] == 'Librarian') {
			return true;
		}else{
			return false;
		}
	}
	function isbusar()
	{
	if (isset($_SESSION['user'])&& $_SESSION['user']['UserType'] == 'Bursa') {
			return true;
		}else{
			return false;
		}
	}
	function isHoD()
	{
	if (isset($_SESSION['user'])&& $_SESSION['user']['UserType'] == 'HoD'){
			return true;
		}else{
			return false;
		}
	}
	function isDOS()
	{
	if (isset($_SESSION['user'])&& $_SESSION['user']['UserType'] == 'DoS'){
			return true;
		}else{
			return false;
		}
	}
	function isJanitor()
	{
	if (isset($_SESSION['user'])&& $_SESSION['user']['UserType'] == 'Janitor'){
			return true;
		}else{
			return false;
		}
	}
	function issport()
	{
	if (isset($_SESSION['user'])&& $_SESSION['user']['UserType'] == 'Sport'){
			return true;
		}else{
			return false;
		}
	}
	function ismedical()
	{
	if (isset($_SESSION['user'])&& $_SESSION['user']['UserType'] == 'Medical '){
			return true;
		}else{
			return false;
		}
	}
	function islab()
	{
	if (isset($_SESSION['user'])&& $_SESSION['user']['UserType'] == 'Lab'){
			return true;
		}else{
			return false;
		}
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