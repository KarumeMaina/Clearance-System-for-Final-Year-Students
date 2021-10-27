<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <?php
  	include("connection.php");
	$query=mysqli_query($conn,"select * from clearance_basics");
	$wata=mysqli_fetch_array($query);
	$copyright=$wata['rights'];
	$developed=$wata['developed'];
	$website=$wata['website'];
	$title=$wata['title'];
	$subtitle=$wata['subtititle'];
  ?>
 
</head>

<div class="wrapper col2">
  <div id="header" class="clear">
  
	<?php
	error_reporting(E_ERROR);
	$username=$_POST['idnumber'];
	$password=$_POST['password'];
	//$passconfirm=$_POST['passconfirm'];
	$residence=$_POST['residence'];
	$department=$_POST['department'];

	$course=$_POST['course'];
	$name=$_POST['fullname'];
	$year=date("Y");
	if($password)
	{
	if($username && $password && $residence && $department && $course && $name)
	{
		$query=mysqli_query($conn,"select * user where idnumber='$idnumber'");
		$ngapi=mysqli_num_rows($query);
	// 	if($ngapi=0)
	// 	{
	// 		$insertstudentdetails=mysqli_query($conn,"insert into student_details (year,name,residence,course,idnumber,password,department,clearance_status) values ('$year','$name','$residence','$course','$username','$password','$department','2')");
	// 		if($insertstudentdetails)
	// 		{
	// 			$insertict=mysqli_query($conn,"insert into department_ict (idnumber,clearance_status,basket) values ('$username','2','')");
	// 			if($insertict)
	// 			{
	// 				$insertdos=mysqli_query($conn,"insert into department_dos (idnumber,clearance_status,basket) values ('$username','2','')");
	// 				if($insertdos)
	// 				{
	// 					$insertfinance=mysqli_query($conn,"insert into department_finance (idnumber,clearance_status,basket) values ('$username','2','')");
	// 					if($insertfinance)
	// 					{
	// 						$insertmess=mysqli_query($conn,"insert into department_food (idnumber,clearance_status,basket) values ('$username','2','')");
	// 						if($insertmess)
	// 						{
	// 							$inserthealth=mysqli_query($conn,"insert into department_health (idnumber,clearance_status,basket) values ('$username','2','')");
	// 							if($inserthealth)
	// 							{
	// 								$insertlibrary=mysqli_query($conn,"insert into department_library (idnumber,clearance_status,basket) values ('$username','2','')");
	// 								if($insertlibrary)
	// 								{
	// 									$inserthod=mysqli_query($conn,"insert into department_hod (idnumber,clearance_status,basket) values ('$username','2','')");
	// 									if($inserthod)
	// 									{
	// 										$insertregistrar=mysqli_query($conn,"insert into department_registrar (idnumber,clearance_status,basket) values ('$username','2','')");
	// 										if($insertregistrar)
	// 										{
	// 											$insertresidence=mysqli_query($conn,"insert into department_residence (idnumber,clearance_status,basket) values ('$username','2','')");
	// 											if($insertresidence)
	// 											{
	// 												$insertsports=mysqli_query($conn,"insert into department_sports (idnumber,clearance_status,basket) values ('$username','2','')");
	// 												if($insertsports)
	// 												{
	// 													echo"<font color='green'>You have been successfully registered fully in all the graduation clearance records</font><br/>Login with the username and password you registered with to view your clearance status";
	// 												}
	// 												else
	// 												{
	// 													echo"you have not been successfully registered in sports' graduation records";
	// 												}
	// 											}
	// 											else
	// 											{
	// 												echo"you have not been successfully registered in residence's graduation records";
	// 											}
	// 										}
	// 										else
	// 										{
	// 											echo"you have not been successfully registered in registrar's graduation records";
	// 										}
	// 									}
	// 									else
	// 									{
	// 										echo"you have not been successfully registered in physical plant's graduation records";
	// 									}
	// 								}
	// 								else
	// 								{
	// 									echo"you have not been successfully registered in library's graduation records";
	// 								}
	// 							}
	// 							else
	// 							{
	// 								echo"you have not been successfully registered in jeremic's graduation records";
	// 							}
	// 						}
	// 						else
	// 						{
	// 							echo"you have not been successfully registered in cafeteria's graduation records";
	// 						}
	// 					}
	// 					else
	// 					{
	// 						echo"you have not been successfully registered in finance's graduation records";
	// 					}
	// 				}
	// 				else
	// 				{
	// 					echo"you have not been successfully registered in dean of students' graduation records";
	// 				}
	// 			}
	// 			else
	// 			{
	// 				echo"you have not been successfully registered in bookstore's graduation records";
	// 			}
	// 		}
	// 		else
	// 		{
	// 			echo"Student details not inserted successfully<br/><a href='studentsignup.php'>Try Again</a>";
	// 		}
	// 	}
	// 	else
	// 	{
	// 		echo"a user with that admission number has already been registered in the system<br/><a href='studentsignup.php'>Try Again</a>";
	// 	}
	// }
	// else
	// {
	// 	echo"All the necessary variables not sent in<br/><a href='studentsignup.php'>Try Again</a>";
	// }
	// }
	// else
	// {
	// 	echo"The passwords you provided do not match<br/><a href='studentsignup.php'>Try Again</a>";
	// }
	}
}
	header('Location: ..\login.php');
	?>
	
	</fieldset>
    <div class="clear"></div>
  </div>
</div>
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy;<?php echo date("Y");?> - All Rights Reserved - <a href=""><?php echo $copyright; ?></a></p>
    <p class="fl_right">Designed by <a target="_blank" href="<?php echo $website; ?>" title="<?php echo $developed; ?>"><?php echo $developed; ?></a></p>
  </div>
</div>
</body>
</html>