<?php
include("connection.php");
	error_reporting(E_ERROR);
	$username=$_POST['username'];
	$password=$_POST['password'];
	if($username && $password)
	{
		//start of series of logins
		$studentquery=mysqli_query($conn,"select * from student_details where idnumber='$username' && password='$password'");
		$studentlogin=mysqli_num_rows($studentquery);
		if($studentlogin == 1)
		{
			//go to student home
			session_start();
			$_SESSION['studentlogin']=$username;
			header("location:new/students/studenthome.php");
			//end of going to student home
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
				header("location:new/sports/sportshome.php");
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
					header("location:new/residence/residencehome.php");
					//end of going to residence home
				}
				else
				{
					$ictquery=mysqli_query($conn,"select * from login_ict where Username='$username' && Password='$Password'");
					$ictlogin=mysqli_num_rows($ictquery);
					if($ictlogin==1)
					{
						//go ict home
						session_start();
						$_SESSION['ictlogin']=$username;
						header("location:new/ict/icthome.php");
						//end of ict home
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
							header("location:new/food/foodhome.php");
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
								header("location:new/health/healthhome.php");
								//end of health home
							}
							else
						{
							$adminquery=mysqli_query($conn,"select * from user where username='$username' && password='$password'");
							$adminlogin=mysqli_num_rows($adminquery);
							if($adminlogin==1)
							{
								//go to health home
								session_start();
								$_SESSION['adminlogin']=$username;
								header("location:new/admin/dashboard.php");
								//end of admin home
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
									header("location:new/library/libraryhome.php");
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
										header("location:new/finance/financehome.php");
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
											header("location:new/dos/doshome.php");
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
												header("location:new/registrar/registrarhome.php");
												//end of registrar home
											}
											else
											{
												$hodquery=mysqli_query($conn,"select * from login_hod where username='$username' && password='$password'");
												$hodlogin=mysqli_num_rows($hodquery);
												if($hodlogin==1)
												{
													//go to hod home
													session_start();
													$_SESSION['hodlogin']=$username;
													header("location:new/hod/hodhome.php");
													//end of hod home
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
			}
		}
		//end of series of logins
	}
	 
	?>


<!DOCTYPE html>
<html lang="zxx">

<head>
	<title><?php echo $title; ?></title>
	<link rel="shortcut icon" type="img/jpg" href="new/admin/img/logo1.jpg">
	<!-- meta-tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Soft Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //meta-tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<?php
	 //start of basic application details
  	include("../connection.php");
	$query=mysqli_query($conn,"select * from clearance_basics");
	$wata=mysqli_fetch_array($query);
	$copyright=$wata['rights'];
	$developed=$wata['developed'];
	$website=$wata['website'];
	$title=$wata['title'];
	$subtitle=$wata['subtititle'];
	//end of basic application details
    ?>
    
</head>

<body>
	<!-- header -->
	 
			 
	<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color:green" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a style="text-transform:uppercase;" class="navbar-brand" href="../index.php"><?php echo $title; ?></a>
            </div>
					
				 </div>
            <!-- /.navbar-collapse -->
        </nav>
	

	<!-- //short-->
	<div class="register-form-main">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>L</span>ogin
					<span>F</span>orm
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="login-form">
				<form action="login.php" method="post">
					<div class="">
						<p>Username </p>
						<input type="text" class="username" name="username" required="" />
					</div>
					<div class="">
						<p>Password</p>
						<input type="password" class="password" name="password" required="" />
					</div>
					
					<input type="submit" value="Login" name="submit">
					<div class="register-forming">
						<p>To Register New Account --
							<a href="new/studentsignup.php">Click Here</a>
						</p>
					</div>
				</form>
			</div>

		</div>
	</div>

	<!-- footer -->
	<footer style="text-align:left;background-color:#000000;color:#FFFFFF;" class="navbar navbar-default navbar-fixed-bottom">
					<div style="text-align:center;" class="container-fluid">&copy; <?php echo date("Y");?> <a href=""><?php echo $title; ?></a> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Design by <a href="<?php echo $website; ?>" target="_blank"><?php echo $developed; ?></a>.</div>
					</footer>
            <!-- /.container-fluid -->
	<!--/footer -->

	<!-- js files -->
	<!-- js -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- bootstrap -->
	<script src="js/bootstrap.js"></script>
	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script>
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- smooth scrolling -->
	<!-- //js-files -->

</body>

</html>