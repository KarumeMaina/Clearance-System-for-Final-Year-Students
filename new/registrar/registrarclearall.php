 <?php
session_start();
if(!isset($_SESSION['registrarlogin']))
{
 	header("location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
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
    <title><?php echo $title; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<body>
	<?php
	$username=$_SESSION['studentlogin'];
	$clearancequery=mysqli_query($conn,"select * from student_details where idnumber='$username'");
	$clearancedata=mysqli_fetch_array($clearancequery);
	$clearedornot=$clearancedata['clearance_status'];
	?>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color:green">
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
            <!-- Top Menu Items -->
			<!-- start processing php -->
			<!-- End processing php -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['registrarlogin']; ?> admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href=""><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="registrarhome.php"><i class="fa fa-fw fa-dashboard"></i> <?php echo $_SESSION['registrarlogin']; ?> Home</a>
                    </li>
					
					<li>
                        <a href="registrarclearedstudents.php"><i class="glyphicon glyphicon-thumbs-up"></i> Cleared Students</a>
                    </li>
					
					<li class="active">
                        <a href="registrarunclearedstudents.php"><i class="glyphicon glyphicon-thumbs-down"></i> Uncleared Students</a>
                    </li>
					<li>
                        <a href="registrarbasket.php"><i class="glyphicon glyphicon-bullhorn"></i> Students Basket</a>
                    </li>

					<li>
                        <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">registrar Clear all students report</h1>
						<p>
						<?php
						$show=$_POST['showstudents'];
						if($show)
						{
							$studentsarray=explode(',',$show);
							foreach($studentsarray as $studentid)
							{
								 $ch=mysqli_query($conn,"select * from department_registrar where idnumber='$studentid'");
								 $hc=mysqli_fetch_array($ch);
								 $basket=$hc['basket'];
								 if($basket=='')
								 {
								 	//start of bookstore clearance check
								$bookstorecheck=mysqli_query($conn,"select * from department_bookstore where idnumber='$studentid' && basket='' && clearance_status='1'");
								$bookstoreno=mysqli_num_rows($bookstorecheck);
								if($bookstoreno==1)
								{
									//start of dos clearance check
									$doscheck=mysqli_query($con,"select * from department_dos where idnumber='$studentid' && basket='' && clearance_status='1'");
									$dosno=mysqli_num_rows($doscheck);
									if($dosno==1)
									{
										//start of finance
										$financecheck=mysqli_query($conn,"select * from department_finance where idnumber='$studentid' && basket='' && clearance_status='1'");
										$financeno=mysqli_num_rows($financecheck);
										if($financeno==1)
										{
											//start of food
											$foodcheck=mysqli_query($conn,"select * from department_food where idnumber='$studentid' && basket='' && clearance_status='1'");
											$foodno=mysqli_num_rows($foodcheck);
											if($foodno==1)
											{
												//start of health
												$healthcheck=mysqli_query($conn,"select * from department_health where idnumber='$studentid' && basket='' && clearance_status='1'");
												$healthno=mysqli_num_rows($healthcheck);
												if($healthno==1)
												{
													//start library
													$librarycheck=mysqli_query($conn,"select * from department_library where idnumber='$studentid' && basket='' && clearance_status='1'");
													$libraryno=mysqli_num_rows($healthcheck);
													if($libraryno==1)
													{
														//start physical plant
														$physicalplantcheck=mysqli_query($conn,"select * from department_physicalplant where idnumber='$studentid' && basket='' && clearance_status='1'");
														$physicalplantno=mysqli_num_rows($physicalplantcheck);
														if($physicalplantno==1)
														{
															//start of residence
															$residencecheck=mysqli_query($conn,"select * from department_residence where idnumber='$studentid' && basket='' && clearance_status='1'");
															$residenceno=mysqli_num_rows($residencecheck);
															if($residenceno==1)
															{
																//start of sports
																$sportscheck=mysqli_query($conn,"select * from department_sports where idnumber='$studentid' && basket='' && clearance_status='1'");
																$sportsno=mysqli_num_rows($sportscheck);
																if($sportsno==1)
																{
																	//start of clear
																	$update=mysqli_query($conn,"update department_registrar set clearance_status='1',basket='' where idnumber='$studentid'");
																	if($update)
																	{
																		$update2=mysqli_query($conn,"update student_details set clearance_status='1' where idnumber='$studentid'");
																		if($update2)
																		{
																			echo"<p style='font-size:1.2em;width:100%;color:white;background-color:blue;'>student with admission number $studentid sucessfully cleared</p>";
																		}
																		else
																		{
																			echo"<p style='font-size:1.2em;width:100%;background-color:red;color:white;'>student with admission number $studentid not successfully cleared, consult the technician for more details</p>";
																		}
																	}
																	else
																	{
																		echo"<p style='font-size:1.2em;width:100%;background-color:red;color:white;'>student with admission number $studentid not successfully cleared, consult the technician for more details</p>";
																	}
																	//end of clear
																}
																else
																{
																	echo"<font color='red'>student with admission number <b>$studentid</b> needs to be cleared by the sports department first</font><br/>";
																}
																//end of sports
															}
															else
															{
																echo"<font color='red'>student with admission number <b>$studentid</b> needs to be cleared by the residence/boarding department first</font><br/>";
															}
															//end of residence
														}
														else
														{
															echo"<font color='red'>student with admission number <b>$studentid</b> needs to be cleared by the physical plant department first</font><br/>";
														}
														//end physical plant
													}
													else
													{
														echo"<font color='red'>student with admission number <b>$studentid</b> needs to be cleared by the library department first</font><br/>";
													}
													//end library
												}
												else
												{
													echo"<font color='red'>student with admission number <b>$studentid</b> needs to be cleared by the health department first</font><br/>";
												}
												//end of health
											}
											else
											{
												echo"<font color='red'>student with admission number <b>$studentid</b> needs to be cleared by the cafeteria(food) department first</font><br/>";
											}
											//end of food
										}
										else
										{
											echo"<font color='red'>student with admission number <b>$studentid</b> needs to be cleared by the finance department first</font><br/>";
										}
										//end of finance
									}
									else
									{
										echo"<font color='red'>student with admission number <b>$studentid</b> needs to be cleared by the dean of students department first</font><br/>";
									}
									//end of dos clearance check
								}
								else
								{
									echo"<font color='red'>student with admission number <b>$studentid</b> needs to be cleared by the bookstore department first</font><br/>";
								}
								//end of bookstore clearance check
								 }
								 else
								 {
								 	echo"<p style='font-size:1.2em;width:100%;background-color:yellow;color:black;'>student with admission number $studentid not successfully cleared due to unreturned items</p>";
								 }
							}
						}
						else
						{
							header("location:registrarhome.php");
						}
						?>
						</p>
                    </div>
                </div>
                <!-- /.row -->

            </div>
			<footer style="text-align:left;background-color:#000000;color:#FFFFFF;" class="navbar navbar-default navbar-fixed-bottom">
					<div style="text-align:center;" class="container-fluid">&copy; <?php echo date("Y");?> <a href=""><?php echo $title; ?></a> 
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Design by <a href="<?php echo $website; ?>" target="_blank"><?php echo $developed; ?></a>.</div>
					</footer>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
	
</body>

</html>
