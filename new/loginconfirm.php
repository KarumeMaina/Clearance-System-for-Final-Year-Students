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
<body id="top">

	<?php
	error_reporting(E_ERROR);
	$username=$_POST['username'];
	$password=$_POST['password'];
	if($username && $password)
	{
		//start of series of logins
		$studentquery=mysqli_query($conn,"select  username, password  * from student_details where idnumber='$username' && password='$password'
			UNION 
    SELECT username, password 
    FROM user 
    WHERE username='$username' AND password='$password'");
		$studentlogin=mysqli_num_rows($studentquery);
		if($studentlogin == 1)
		{
			//go to student home
			session_start();
			$_SESSION['studentlogin']=$username;
			header("location:students/studenthome.php");
			//end of going to student home
		}
		else
		{
			$adminquery=mysqli_query($conn,"select * from user where username='$username' && password='$password'");
			$adminlogin=mysqli_num_rows($adminquery);
			if($adminlogin==1)
			{
				//go to sports home
				session_start();
				$_SESSION['adminlogin']=$username;
				header("location:admin/dashboard.php");
				//end of going to sports home
			}
		      else
		         {
			$sportsquery=mysqli_query($conn,"select * from login_sports where username='$username' && password='$password'");
			$sportslogin=mysqli_num_rows($sportsquery);
			if($sportslogin==1)
			{
				//go to sports home
				session_start();
				$_SESSION['sportslogin']=$username;
				header("location:sports/sportshome.php");
				//end of going to sports home
			}
			else
			{
				$residencequery=mysqli_query($conn,"select * from login_residence where username='$username' && password='$password'");
				$residencelogin=mysqli_num_rows($residencequery);
				if($residencelogin==1)
				{
					//go to residence home
					session_start();
					$_SESSION['residencelogin']=$username;
					header("location:residence/residencehome.php");
					//end of going to residence home
				}
				else
				{
					$ictquery=mysqli_query($conn,"select * from login_ict where username='$username' && password='$password'");
						$ictlogin=mysqli_num_rows($ictquery);
						if($ictlogin==1)
						{
							//go to food home
							session_start();
							$_SESSION['ictlogin']=$username;
							header("location:ict/icthome.php");
					}
					else
					{
						$foodquery=mysqli_query($conn,"select * from login_food where username='$username' && password='$password'");
						$foodlogin=mysqli_num_rows($foodquery);
						if($foodlogin==1)
						{
							//go to food home
							session_start();
							$_SESSION['foodlogin']=$username;
							header("location:food/foodhome.php");
							//end of food home
						}
						else
						{
							$healthquery=mysqli_query($conn,"select * from login_health where username='$username' && password='$password'");
							$healthlogin=mysqli_num_rows($healthquery);
							if($healthlogin==1)
							{
								//go to health home
								session_start();
								$_SESSION['healthlogin']=$username;
								header("location:health/healthhome.php");
								//end of health home
							}
							else
							{
								$libraryquery=mysqli_query($conn,"select * from login_library where username='$username' && password='$password'");
								$librarylogin=mysqli_num_rows($libraryquery);
								if($librarylogin==1)
								{
									//go to library home
									session_start();
									$_SESSION['librarylogin']=$username;
									header("location:library/libraryhome.php");
									//end of library home
								}
								else
								{
									$financequery=mysqli_query($conn,"select * from login_finance where username='$username' && password='$password'");
									$financelogin=mysqli_num_rows($financequery);
									if($financelogin==1)
									{
										//go to finance home
										session_start();
										$_SESSION['financelogin']=$username;
										header("location:finance/financehome.php");
										//end of finance home
									}
									else
									{
										$dosquery=mysqli_query($conn,"select * from login_dos where username='$username' && password='$password'");
										$doslogin=mysqli_num_rows($dosquery);
										if($doslogin==1)
										{
											//go to dos home
											session_start();
											$_SESSION['doslogin']=$username;
											header("location:dos/doshome.php");
											//end of dos home
										}
										else
										{
											$registrarquery=mysqli_query($conn,"select * from login_registrar where username='$username' && password='$password'");
											$registrarlogin=mysqli_num_rows($registrarquery);
											if($registrarlogin==1)
											{
												//go to registrar home
												session_start();
												$_SESSION['registrarlogin']=$username;
												header("location:registrar/registrarhome.php");
												//end of registrar home
											}
											else
											{
												$bookstorequery=mysqli_query($conn,"select * from login_bookstore where username='$username' && password='$password'");
												$bookstorelogin=mysqli_num_rows($bookstorequery);
												if($bookstorelogin==1)
												{
													//go to bookstore home
													session_start();
													$_SESSION['bookstorelogin']=$username;
													header("location:bookstore/bookstorehome.php");
													//end of bookstore home
												}
												else
												{
													echo"Wrong username or password<br/><a href='index.php'>Try Again</a>";
												}
												//end
											}
										}
									}
								}
							}
						}
					}
				}
			}
			header("location:index.php");
		}
		//end of series of logins
	
	}
	
}
	?>
	</p>
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
