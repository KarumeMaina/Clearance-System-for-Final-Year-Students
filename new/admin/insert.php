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
