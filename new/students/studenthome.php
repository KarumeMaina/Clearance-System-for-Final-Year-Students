<?php
session_start();
if(!isset($_SESSION['studentlogin']))
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
    <link rel="shortcut icon" type="img/jpg" href=" .../img/logo1.jpg">

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
                <a style="text-transform:uppercase;" class="navbar-brand" href="../index.php"><?php echo $title; ?> STUDENT's HOMEPAGE</a>
            </div>
            <!-- Top Menu Items -->
			<!-- start processing php -->
			<!-- End processing php -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                	   
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['studentlogin']; ?> <b class="caret"></b></a>
    
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
                    <li class="active">
                        <a href="studenthome.php"><i class="fa fa-fw fa-dashboard"></i> <?php echo $_SESSION['studentlogin']; ?> Home</a>
                    </li>
					
					<li>
                        <a href="payment.php"  ><i class="glyphicon glyphicon-payment"></i> payment</a>
                    </li>
					<li>
                        <a href="" onClick="print()"><i class="glyphicon glyphicon-print"></i> print report</a>
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
                        <h1 class="page-header"><?php echo $_SESSION['studentlogin']; ?> Clearance Report</h1>
                        <h1 class="page-header"><?php echo $_SESSION['department']; ?> Clearance Report</h1>
						<p>
						<table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Department</th>
                                        <th>clearance status</th>
                                        <th>Unsettled issues</th>
										<th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
									<?php
									$clearance=mysqli_query($conn,"select * from department_registrar where idnumber='$username'");
									$data=mysqli_fetch_array($clearance);
									$clearancestatus=$data['clearance_status'];
									$basket=$data['basket'];
									if($clearancestatus==1)
									{
										$status="success";
										$clearancetext="you have been cleared in this department";
										$glyphicon="glyphicon glyphicon-ok";
										$count=1;
									}
									else
									{

										$status="danger";
										$clearancetext="you have not been cleared in this department";
										$glyphicon="glyphicon glyphicon-exclamation-sign";
									}
									if($basket=="")
									{
										$baskettext="no unsettled item recorded";
									}
									else
									{
										$baskettext=$basket;
										


									}
									?>
                                    <tr class="<?php echo $status; ?>">
                                        <td>Registrar</td>
                                        <td><?php echo $clearancetext; ?></td>
                                        <td><?php echo $baskettext; ?></td>
										<td><strong class="<?php echo $glyphicon; ?>"></strong></td>
                                    </tr>
                                    <?php
									$clearance=mysqli_query($conn,"select * from department_dos where idnumber='$username'");
									$data=mysqli_fetch_array($clearance);
									$clearancestatus=$data['clearance_status'];
									$basket=$data['basket'];
									if($clearancestatus==1)
									{
										$status="success";
										$clearancetext="you have been cleared in this department";
										$glyphicon="glyphicon glyphicon-ok";
										$count++;
									}
									else
									{
										$status="danger";
										$clearancetext="you have not been cleared in this department";
										$glyphicon="glyphicon glyphicon-exclamation-sign";
									}
									if($basket=="")
									{
										$baskettext="no unsettled item recorded";
									}
									else
									{
										$baskettext=$basket;
									}
									?>
                                    <tr class="<?php echo $status; ?>">
                                        <td>Dean of Students</td>
                                        <td><?php echo $clearancetext; ?></td>
                                        <td><?php echo $baskettext; ?></td>
										<td><strong class="<?php echo $glyphicon; ?>"></strong></td>
                                    </tr>
									<?php
									$clearance=mysqli_query($con,"select * from department_finance where idnumber='$username'");
									$data=mysqli_fetch_array($clearance);
									$clearancestatus=$data['clearance_status'];
									$basket=$data['basket'];
									if($clearancestatus==1)
									{
										$status="success";
										$clearancetext="you have been cleared in this department";
										$glyphicon="glyphicon glyphicon-ok";
										$count++;
									}
									else
									{
										$status="danger";
										$clearancetext="you have not been cleared in this department";
										$glyphicon="glyphicon glyphicon-exclamation-sign";
									}
									if($basket=="")
									{
										$baskettext="no unsettled item recorded";
									}
									else
									{
										$baskettext=$basket;
									}
									?>
                                    <tr class="<?php echo $status; ?>">
                                        <td>Finance</td>
                                        <td><?php echo $clearancetext; ?></td>
                                        <td><?php echo $baskettext; ?></td>
										<td><strong class="<?php echo $glyphicon; ?>"></strong></td>
                                    </tr>
                                    <?php
									$clearance=mysqli_query($conn,"select * from department_health where idnumber='$username'");
									$data=mysqli_fetch_array($clearance);
									$clearancestatus=$data['clearance_status'];
									$basket=$data['basket'];
									if($clearancestatus==1)
									{
										$status="success";
										$clearancetext="you have been cleared in this department";
										$glyphicon="glyphicon glyphicon-ok";
										$count++;
									}
									else
									{
										$status="danger";
										$clearancetext="you have not been cleared in this department";
										$glyphicon="glyphicon glyphicon-exclamation-sign";
									}
									if($basket=="")
									{
										$baskettext="no unsettled item recorded";
									}
									else
									{
										$baskettext=$basket;
									}
									?>
                                    <tr class="<?php echo $status; ?>">
                                        <td>Health</td>
                                        <td><?php echo $clearancetext; ?></td>
                                        <td><?php echo $baskettext; ?></td>
										<td><strong class="<?php echo $glyphicon; ?>"></strong></td>
                                    </tr>
                                    <?php
									$clearance=mysqli_query($conn,"select * from department_library where idnumber='$username'");
									$data=mysqli_fetch_array($clearance);
									$clearancestatus=$data['clearance_status'];
									$basket=$data['basket'];
									if($clearancestatus==1)
									{
										$status="success";
										$clearancetext="you have been cleared in this department";
										$glyphicon="glyphicon glyphicon-ok";
										$count++;
									}
									else
									{
										$status="danger";
										$clearancetext="you have not been cleared in this department";
										$glyphicon="glyphicon glyphicon-exclamation-sign";
									}
									if($basket=="")
									{
										$baskettext="no unsettled item recorded";
									}
									else
									{
										$baskettext=$basket;
									}
									?>
                                    <tr class="<?php echo $status; ?>">
                                        <td>Library</td>
                                        <td><?php echo $clearancetext; ?></td>
                                        <td><?php echo $baskettext; ?></td>
										<td><strong class="<?php echo $glyphicon; ?>"></strong></td>
                                    </tr>
                                    <?php
									$clearance=mysqli_query($conn,"select * from department_food where idnumber='$username'");
									$data=mysqli_fetch_array($clearance);
									$clearancestatus=$data['clearance_status'];
									$basket=$data['basket'];
									if($clearancestatus==1)
									{
										$status="success";
										$clearancetext="you have been cleared in this department";
										$glyphicon="glyphicon glyphicon-ok";
										$count++;
									}
									else
									{
										$status="danger";
										$clearancetext="you have not been cleared in this department";
										$glyphicon="glyphicon glyphicon-exclamation-sign";
									}
									if($basket=="")
									{
										$baskettext="no unsettled item recorded";
									}
									else
									{
										$baskettext=$basket;
									}
									?>
                                    <tr class="<?php echo $status; ?>">
                                        <td>Mess</td>
                                        <td><?php echo $clearancetext; ?></td>
                                        <td><?php echo $baskettext; ?></td>
										<td><strong class="<?php echo $glyphicon; ?>"></strong></td>
                                    </tr>
                                    <?php
									$clearance=mysqli_query($conn,"select * from department_hod where idnumber='$username'");
									$data=mysqli_fetch_array($clearance);
									$clearancestatus=$data['clearance_status'];
									$basket=$data['basket'];
									if($clearancestatus==1)
									{
										$status="success";
										$clearancetext="you have been cleared in this department";
										$glyphicon="glyphicon glyphicon-ok";
										$count++;
									}
									else
									{
										$status="danger";
										$clearancetext="you have not been cleared in this department";
										$glyphicon="glyphicon glyphicon-exclamation-sign";
									}
									if($basket=="")
									{
										$baskettext="no unsettled item recorded";
									}
									else
									{
										$baskettext=$basket;
									}
									?>
                                    <tr class="<?php echo $status; ?>">
                                        <td>Head of Department</td>
                                        <td><?php echo $clearancetext; ?></td>
                                        <td><?php echo $baskettext; ?></td>
										<td><strong class="<?php echo $glyphicon; ?>"></strong></td>
                                    </tr>
                                    <?php
									$clearance=mysqli_query($conn,"select * from department_residence where idnumber='$username'");
									$data=mysqli_fetch_array($clearance);
									$clearancestatus=$data['clearance_status'];
									$basket=$data['basket'];
									if($clearancestatus==1)
									{
										$status="success";
										$clearancetext="you have been cleared in this department";
										$glyphicon="glyphicon glyphicon-ok";
										$count++;
									}
									else
									{
										$status="danger";
										$clearancetext="you have not been cleared in this department";
										$glyphicon="glyphicon glyphicon-exclamation-sign";
									}
									if($basket=="")
									{
										$baskettext="no unsettled item recorded";
									}
									else
									{
										$baskettext=$basket;
									}
									?>
                                    <tr class="<?php echo $status; ?>">
                                        <td>Residence</td>
                                        <td><?php echo $clearancetext; ?></td>
                                        <td><?php echo $baskettext; ?></td>
										<td><strong class="<?php echo $glyphicon; ?>"></strong></td>
                                    </tr>
									<?php
									$clearance=mysqli_query($conn,"select * from department_sports where idnumber='$username'");
									$data=mysqli_fetch_array($clearance);
									$clearancestatus=$data['clearance_status'];
									$basket=$data['basket'];
									if($clearancestatus==1)
									{
										$status="success";
										$clearancetext="you have been cleared in this department";
										$glyphicon="glyphicon glyphicon-ok";
										$count++;
									}
									else
									{
										$status="danger";
										$clearancetext="you have not been cleared in this department";
										$glyphicon="glyphicon glyphicon-exclamation-sign";
									}
									if($basket=="")
									{
										$baskettext="no unsettled item recorded";
									}
									else
									{
										$baskettext=$basket;
									}
									?>
                                    <tr class="<?php echo $status; ?>">
                                        <td>Sports</td>
                                        <td><?php echo $clearancetext; ?></td>
                                        <td><?php echo $baskettext; ?></td>
										<td><strong class="<?php echo $glyphicon; ?>"></strong></td>
                                    </tr>
									<?php
									$clearance=mysqli_query($conn,"select * from department_ict where idnumber='$username'");
									$data=mysqli_fetch_array($clearance);
									$clearancestatus=$data['clearance_status'];
									$basket=$data['basket'];
									if($clearancestatus==1)
									{
										$status="success";
										$clearancetext="you have been cleared in this department";
										$glyphicon="glyphicon glyphicon-ok";
										$count++;
									}
									else
									{
										$status="danger";
										$clearancetext="you have not been cleared in this department";
										$glyphicon="glyphicon glyphicon-exclamation-sign";
									}
									if($basket=="")
									{
										$baskettext="no unsettled item recorded";
									}
									else
									{
										$baskettext=$basket;
									}
									?>
                                    <tr class="<?php echo $status; ?>">
                                        <td>ICT</td>
                                        <td><?php echo $clearancetext; ?></td>
                                        <td><?php echo $baskettext; ?></td>
										<td><strong class="<?php echo $glyphicon; ?>"></strong></td>
                                    </tr>
                                </tbody>
                            </table>
							<hr/><hr/>
							<?php
						//start of checking for general clearance of student
						if($clearedornot==2)
						{
						$percentage=($count/10) * 100;
						?>
						<div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title">Student Final Clearance Status</h3>
                            </div>
                            <div class="panel-body">
                               <div class="alert alert-warning">
                    		   <strong>Oh snap!</strong> you have not been successfully cleared for graduation in all the departments.
                			   </div>
							   <div class="progress">
                    		   <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $percentage;?>%"><span class="sr-only"><?php echo $percentage;?>% Complete (danger)</span>
							   cleared(<?php echo $percentage;?>%)
                    		   </div>
							   not cleared(<?php echo 100 - $percentage;?>%)
                            </div>
                            </div>
                        </div>
						<?php
						}
						else
						{
						?>
						<div class="panel panel-green">
                            <div class="panel-heading">
                                <h3 class="panel-title">Student Final Clearance Status</h3>
                            </div>
                            <div class="panel-body">
                                <div class="alert alert-success">
                    			<strong>Well done!</strong> You have been successfully cleared for graduation in all the departments.
                				</div>
								<div class="progress">
                    		   <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><span class="sr-only">100% Complete (successfull)</span>
							   you have successfully cleared from MUST, congratulations!!
                    		   </div>
							   </div>
                            </div>
                        </div>
                        </div>
						<?php
						}
						//end of checking for general clearance for student
						?>
						<br/><br/><br/>
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
