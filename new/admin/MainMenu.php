
<!DOCTYPE html>
<html lang="en">
<head  style="background-color: green">
 
    <meta charset="utf-8" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title  style="background-color: green">Online Students Clearance System | MainMenu</title>
    <link rel="shortcut icon" type="img/jpg" href="img/logo1.jpg">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="DataTables/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="DataTables/dataTables.bootstrap.css">
    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
</head>
<body>
 <?php
    $username=$_SESSION['username'];
    $clearancequery=mysqli_query($conn,"select * from student_details where idnumber='$idnumber'");
    $clearancedata=mysqli_fetch_array($clearancequery);
    $clearedornot=$clearancedata['clearance_status'];
    ?>
    <div id="wrapper"  style="background-color: green">

        <!-- Navigation -->
        <nav style="background-color: green" class="  navbar-fixed-top " role="navigation" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header"  style="background-color: green">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"  style="background-color: green">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a style="text-transform:uppercase; background-color: green" class="navbar-brand" href="../index.php"><?php echo $title; ?></a>
            </div>
            <!-- Top Menu Items -->
            <!-- start processing php -->
            <!-- End processing php -->
            <ul class="nav navbar-right top-nav"  style="background-color: green">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['adminlogin']; ?> admin <b class="caret"></b></a>
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

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation" >
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </li>
                    <li>
                        <a href="Dashboard.php" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                                <a href="#"><i class="fa fa-users"></i> Student<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                     
                                    <li>
                                        <a href="registerdStudents.php"><i class="glyphicon glyphicon-th"></i>   Manage Registered Studnets</a>
                                    </li>
                                </ul>
 
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                        <a href="clearedStd.php"><i class="glyphicon glyphicon-ok"></i>  Cleared Students</a>
                    </li>
                             

                     
                    <li>
                                <a href="#"><i class="fa fa-user fa-fw"></i> Staffs<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="AddUser.php"><i class="glyphicon glyphicon-plus" ></i> Add User</a>
                                    </li>
                                    <li>
                                        <a href="ManageUsers.php"><i class="fa fa-users fa-fw"> </i> Manage Users</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                </ul>

            </div>
        </div>
    </nav>
<footer style="text-align:left;background-color:#000000;color:#FFFFFF;" class="  navbar-fixed-bottom">
          <div style="text-align:center;" class="container-fluid">&copy; <?php echo date("Y");?> <a href=""><?php echo $title; ?></a> 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          Design by <a href="<?php echo $website; ?>" target="_blank"><?php echo $developed; ?></a>.</div>
          </footer>
    
    </div>
<script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/startmin.js"></script>
<script type="text/javascript" src="DataTables/js/dataTables.bootstrap.min.js">
</script>
<script type="text/javascript" src="DataTables/js/dataTables.bootstrap.js"></script>

<script>
          $(document).ready( function () {
    $('#table_id').DataTable();
} );
        </script>


</body>
</html>
