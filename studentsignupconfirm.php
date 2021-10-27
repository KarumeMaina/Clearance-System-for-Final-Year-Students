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
<title><?php echo $title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<link rel="icon" type="image/ico" href="images/icon.ico" />
</head>

<div class="wrapper col2">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="..\login.php"><?php echo $title; ?></a></h1>
      <p><?php echo $subtitle; ?></p>
    </div>
     
  </div>
</div>
<div class="wrapper col4">
  <div id="container" class="clear"> 
  <fieldset style="text-align:center;">
  	<legend><h1 align="center">Student Sign Up Result</h1></legend>
	<p>
	<?php
	error_reporting(E_ERROR);
	$username=$_POST['idnumber'];
	$password_1=$_POST['password_1'];
	$password_2=$_POST['password_2'];

	//$passconfirm=$_POST['passconfirm'];
	$residence=$_POST['residence'];
	$department=$_POST['department'];
	$major=$_POST['major'];
	$name=$_POST['fullname'];
	$year=date("Y");
	if($password)
	{
	if($username && $password && $residence && $department && $major && $name)
	{
		$query=mysqli_query($conn,"select * from student_details where idnumber='$username'");
		$ngapi=mysqli_num_rows($query);
		if($ngapi==0)
		{
			$insertstudentdetails=mysqli_query($conn,"insert into student_details (year,name,residence,major,idnumber,password,department,clearance_status) values ('$year','$name','$residence','$major','$username','$password','$department','2')");
			if($insertstudentdetails)
			{
				$insertbookstore=mysqli_query($conn,"insert into department_bookstore (idnumber,clearance_status,basket) values ('$username','2','')");
				if($insertbookstore)
				{
					$insertdos=mysqli_query($conn,"insert into department_dos (idnumber,clearance_status,basket) values ('$username','2','')");
					if($insertdos)
					{
						$insertfinance=mysqli_query($conn,"insert into department_finance (idnumber,clearance_status,basket) values ('$username','2','')");
						if($insertfinance)
						{
							$insertfood=mysqli_query($conn,"insert into department_food (idnumber,clearance_status,basket) values ('$username','2','')");
							if($insertfood)
							{
								$inserthealth=mysqli_query($conn,"insert into department_health (idnumber,clearance_status,basket) values ('$username','2','')");
								if($inserthealth)
								{
									$insertlibrary=mysqli_query($conn,"insert into department_library (idnumber,clearance_status,basket) values ('$username','2','')");
									if($insertlibrary)
									{
										$insertphysicalplant=mysqli_query($conn,"insert into department_physicalplant (idnumber,clearance_status,basket) values ('$username','2','')");
										if($insertphysicalplant)
										{
											$insertregistrar=mysqli_query($conn,"insert into department_registrar (idnumber,clearance_status,basket) values ('$username','2','')");
											if($insertregistrar)
											{
												$insertresidence=mysqli_query($conn,"insert into department_residence (idnumber,clearance_status,basket) values ('$username','2','')");
												if($insertresidence)
												{
													$insertsports=mysqli_query($conn,"insert into department_sports (idnumber,clearance_status,basket) values ('$username','2','')");
													if($insertsports)
													{
														echo"<font color='green'>You have been successfully registered fully in all the graduation clearance records</font><br/>Login with the username and password you registered with to view your clearance status";
													}
													else
													{
														echo"you have not been successfully registered in sports' graduation records";
													}
												}
												else
												{
													echo"you have not been successfully registered in residence's graduation records";
												}
											}
											else
											{
												echo"you have not been successfully registered in registrar's graduation records";
											}
										}
										else
										{
											echo"you have not been successfully registered in physical plant's graduation records";
										}
									}
									else
									{
										echo"you have not been successfully registered in library's graduation records";
									}
								}
								else
								{
									echo"you have not been successfully registered in jeremic's graduation records";
								}
							}
							else
							{
								echo"you have not been successfully registered in cafeteria's graduation records";
							}
						}
						else
						{
							echo"you have not been successfully registered in finance's graduation records";
						}
					}
					else
					{
						echo"you have not been successfully registered in dean of students' graduation records";
					}
				}
				else
				{
					echo"you have not been successfully registered in bookstore's graduation records";
				}
			}
			else
			{
				echo"Student details not inserted successfully<br/><a href='studentsignup.php'>Try Again</a>";
			}
		}
		else
		{
			echo"a user with that admission number has already been registered in the system<br/><a href='studentsignup.php'>Try Again</a>";
		}
	}
	else
	{
		echo"All the necessary variables not sent in<br/><a href='studentsignup.php'>Try Again</a>";
	}
	}
	else
	{
		echo"The passwords you provided do not match<br/><a href='studentsignup.php'>Try Again</a>";
	}
	?>
	</p>
	</fieldset>
    <div class="clear"></div>
  </div>
</div>
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2014-<?php echo date("Y");?> - All Rights Reserved - <a href=""><?php echo $copyright; ?></a></p>
    <p class="fl_right">Designed by <a target="_blank" href="<?php echo $website; ?>" title="<?php echo $developed; ?>"><?php echo $developed; ?></a></p>
  </div>
</div>
</body>
</html>