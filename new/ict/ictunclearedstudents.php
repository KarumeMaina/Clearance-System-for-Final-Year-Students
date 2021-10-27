<?php
session_start();
if(!isset($_SESSION['ictlogin']))
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['ictlogin']; ?> admin <b class="caret"></b></a>
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
                        <a href="icthome.php"><i class="fa fa-fw fa-dashboard"></i> <?php echo $_SESSION['physicalplantlogin']; ?> Home</a>
                    </li>
					
					<li>
                        <a href="ictclearedstudents.php"><i class="glyphicon glyphicon-thumbs-up"></i> Cleared Students</a>
                    </li>
					
					<li class="active">
                        <a href="ictunclearedstudents.php"><i class="glyphicon glyphicon-thumbs-down"></i> Uncleared Students</a>
                    </li>
					<li>
                        <a href="ictbasket.php"><i class="glyphicon glyphicon-bullhorn"></i> Students Basket</a>
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
                        <h1 class="page-header">ict
                        Uncleared Students</h1>
						<p>
						<?php
						$year=date('Y');
						$query=mysqli_query($conn,"select * from department_ict where clearance_status='2'");
						$no=mysqli_num_rows($query);
						if($no==0)
						{
							echo"There are no students who have not been cleared in the ict department";
						}
						else
						{
							echo"
							<table style='width:100%;' class='table table-bordered table-hover table-striped'>
							<tr>
								<th>STUDENT NAME</th>
								<th>STUDENT ID</th>
								<th>STUDENT COURSE</th>
								<th>STUDENT DEPARTMENT</th>
								<th>ITEMS OWED</th>
								<th></th>
							</tr>
							";
							$studentsarray=array();
							$counter=1;
							while($data=mysqli_fetch_array($query))
							{
								$studentid=$data['idnumber'];
								$ter=mysqli_query($conn,"select * from student_details where idnumber='$studentid' && year='$year'");
								$ata=mysqli_num_rows($ter);
								if($ata==0)
								{
									//student exist but from previous years
									
									//end of student exist but from previous years
								}
								else
								{
									$ta=mysqli_fetch_array($ter);
									$studentsarray[$counter]=$studentid;
									echo"
									<tr>
										<td>".$ta['name']."</td>
										<td>".$ta['idnumber']."</td>
										<td>".$ta['course']."</td>
										<td>".$ta['department']."</td>
										<td>".$data['basket']."</td>
										<td>
										<form action='ictclearstudent.php' method='post'>
										<input type='hidden' name='incre' value='".$data['incre']."'/> 
										<input type='submit' value='Clear Student' class='btn btn-info'/>
										</form>
										</td>
									</tr>
									";
									$counter++;
								}
							}
							foreach($studentsarray as $students)
							{
								if($show=='')
								{
									$show=$students;
								}
								else
								{
									$show=$show.",".$students;
								}
							}
							echo"
							</table>
							<br/><br/>
							<form action='ictclearall.php' method='post'>
							<input type='hidden' name='showstudents' value='".$show."'/>
							<center><input type='submit' value='Clear All Students' class='btn btn-success'/></center>
							</form>
							";
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
