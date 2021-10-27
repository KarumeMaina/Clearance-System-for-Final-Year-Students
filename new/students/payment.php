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
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation"  style="background-color:green">
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['foodlogin']; ?> admin <b class="caret"></b></a>
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
                
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">


<!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        
                         
                        <p>
                        <?php
                        $year=date("Y");
                        $query=mysqli_query($conn,"select * from department_finance where basket != ''");
                        $no=mysqli_num_rows($query);
                        if($no==0)
                        {
                             ;
                        }
                        else
                        {
                            echo"
                            <table class='table table-bordered table-hover table-striped'>
                            <tr>
                                <th>NAME</th>
                                <th>ADMISSION NUMBER</th>
                                <th>DEPARTMENT</th>
                                <th>BASKET</th>
                                <th></th>
                            </tr>
                            ";
                            while($data=mysqli_fetch_array($query))
                            {
                                $studentid=$data['idnumber'];
                                $chek=mysqli_query($conn,"select * from student_details where year='$year' && idnumber='$studentid'");
                                $kech=mysqli_fetch_array($chek);
                                echo"
                                <tr>
                                    <td>".$kech['name']."</td>
                                    <td>".$kech['idnumber']."</td>
                                    <td>".$kech['department']."</td>
                                    <td>".$data['basket']."</td>
                                    <td>
                                    <form action='financeclearbasket.php' method='post'>
                                    <input type='hidden' name='incre' value='".$data['incre']."'/> 
                                    <input type='submit' value='Pay ' class='btn btn-info'/>
                                    </form>
                                    </td>
                                </tr>
                                ";
                            }
                            echo"
                            </table>
                            ";
                          
                        }
                        ?>
             
                        <?php
                        $year=date("Y");
                        $query=mysqli_query($conn,"select * from department_food where basket != ''");
                        $no=mysqli_num_rows($query);
                        if($no==0)
                        {
                             ;
                        }
                        else
                        {
                            echo"
                            <table class='table table-bordered table-hover table-striped'>
                            <tr>
                                <th>NAME</th>
                                <th>ADMISSION NUMBER</th>
                                <th>DEPARTMENT</th>
                                <th>BASKET</th>
                                <th></th>
                            </tr>
                            ";
                            while($data=mysqli_fetch_array($query))
                            {
                                $studentid=$data['idnumber'];
                                $chek=mysqli_query($conn,"select * from student_details where year='$year' && idnumber='$studentid'");
                                $kech=mysqli_fetch_array($chek);
                                echo"
                                <tr>
                                    <td>".$kech['name']."</td>
                                    <td>".$kech['idnumber']."</td>
                                    <td>".$kech['department']."</td>
                                    <td>".$data['basket']."</td>
                                    <td>
                                    <form action='paymentclearbasket.php' method='post'>
                                    <input type='hidden' name='incre' value='".$data['incre']."'/> 
                                    <input type='submit' value='Pay' class='btn btn-info'/>
                                    </form>
                                    </td>
                                </tr>
                                ";
                            }
                            echo"
                            </table>
                            ";
                          
                        }
                        ?>
                        
          
         

      
                        <?php
                        $year=date("Y");
                        $query=mysqli_query($conn,"select * from department_library where basket != ''");
                        $no=mysqli_num_rows($query);
                        if($no==0)
                        {
                             ;
                        }
                        else
                        {
                            echo"
                            <table class='table table-bordered table-hover table-striped'>
                            <tr>
                                <th>NAME</th>
                                <th>ADMISSION NUMBER</th>
                                <th>DEPARTMENT</th>
                                <th>BASKET</th>
                                <th></th>
                            </tr>
                            ";
                            while($data=mysqli_fetch_array($query))
                            {
                                $studentid=$data['idnumber'];
                                $chek=mysqli_query($conn,"select * from student_details where year='$year' && idnumber='$studentid'");
                                $kech=mysqli_fetch_array($chek);
                                echo"
                                <tr>
                                    <td>".$kech['name']."</td>
                                    <td>".$kech['idnumber']."</td>
                                    <td>".$kech['department']."</td>
                                    <td>".$data['basket']."</td>
                                    <td>
                                    <form action='libraryclearbasket.php' method='post'>
                                    <input type='hidden' name='incre' value='".$data['incre']."'/> 
                                    <input type='submit' value='Pay' class='btn btn-info'/>
                                    </form>
                                    </td>
                                </tr>
                                ";
                            }
                            echo"
                            </table>
                            ";
                        }
                        ?>
                        
                        </p></center>
                        <!DOCTYPE html>
<html lang="en">
 
                         
                        <?php
                        $year=date("Y");
                        $query=mysqli_query($conn,"select * from department_sports where basket != ''");
                        $no=mysqli_num_rows($query);
                        if($no==0)
                        {
                            ;
                        }
                        else
                        {
                            echo"
                            <table class='table table-bordered table-hover table-striped'>
                            <tr>
                                <th>NAME</th>
                                <th>ADMISSION NUMBER</th>
                                <th>DEPARTMENT</th>
                                <th>BASKET</th>
                                <th></th>
                            </tr>
                            ";
                            while($data=mysqli_fetch_array($query))
                            {
                                $studentid=$data['idnumber'];
                                $chek=mysqli_query($conn,"select * from student_details where year='$year' && idnumber='$studentid'");
                                $kech=mysqli_fetch_array($chek);
                                echo"
                                <tr>
                                    <td>".$kech['name']."</td>
                                    <td>".$kech['idnumber']."</td>
                                    <td>".$kech['department']."</td>
                                    <td>".$data['basket']."</td>
                                    <td>
                                    <form action=' sportsclearbasket.php' method='post'>
                                    <input type='hidden' name='incre' value='".$data['incre']."'/> 
                                    <input type='submit' value='Pay' class='btn btn-info'/>
                                    </form>
                                    </td>
                                </tr>
                                ";
                            }
                            echo"
                            </table>
                            ";
                        }
                        ?>
                        
         

                <!-- Page Heading -->
                 
                         
                        <?php
                        $year=date("Y");
                        $query=mysqli_query($conn,"select * from department_residence where basket != ''");
                        $no=mysqli_num_rows($query);
                        if($no==0)
                        {
                            ;
                        }
                        else
                        {
                            echo"
                            <table class='table table-bordered table-hover table-striped'>
                            <tr>
                                <th>NAME</th>
                                <th>ADMISSION NUMBER</th>
                                <th>DEPARTMENT</th>
                                <th>BASKET</th>
                                <th></th>
                            </tr>
                            ";
                            while($data=mysqli_fetch_array($query))
                            {
                                $studentid=$data['idnumber'];
                                $chek=mysqli_query($conn,"select * from student_details where year='$year' && idnumber='$studentid'");
                                $kech=mysqli_fetch_array($chek);
                                echo"
                                <tr>
                                    <td>".$kech['name']."</td>
                                    <td>".$kech['idnumber']."</td>
                                    <td>".$kech['department']."</td>
                                    <td>".$data['basket']."</td>
                                    <td>
                                    <form action=' residenceclearbasket.php' method='post'>
                                    <input type='hidden' name='incre' value='".$data['incre']."'/> 
                                    <input type='submit' value='Pay' class='btn btn-info'/>
                                    </form>
                                    </td>
                                </tr>
                                ";
                            }
                            echo"
                            </table>
                            ";
                        }
                        ?>
                        
                        <?php
                        $year=date("Y");
                        $query=mysqli_query($conn,"select * from department_health where basket != ''");
                        $no=mysqli_num_rows($query);
                        if($no==0)
                        {
                            ;
                        }
                        else
                        {
                            echo"
                            <table class='table table-bordered table-hover table-striped'>
                            <tr>
                                <th>NAME</th>
                                <th>ADMISSION NUMBER</th>
                                <th>DEPARTMENT</th>
                                <th>BASKET</th>
                                <th></th>
                            </tr>
                            ";
                            while($data=mysqli_fetch_array($query))
                            {
                                $studentid=$data['idnumber'];
                                $chek=mysqli_query($conn,"select * from student_details where year='$year' && idnumber='$studentid'");
                                $kech=mysqli_fetch_array($chek);
                                echo"
                                <tr>
                                    <td>".$kech['name']."</td>
                                    <td>".$kech['idnumber']."</td>
                                    <td>".$kech['department']."</td>
                                    <td>".$data['basket']."</td>
                                    <td>
                                    <form action=' healthclearbasket.php' method='post'>
                                    <input type='hidden' name='incre' value='".$data['incre']."'/> 
                                    <input type='submit' value='Pay' class='btn btn-info'/>
                                    </form>
                                    </td>
                                </tr>
                                ";
                            }
                            echo"
                            </table>
                            ";
                        }
                        ?>
                        <?php
                        $year=date("Y");
                        $query=mysqli_query($conn,"select * from department_ict where basket != ''");
                        $no=mysqli_num_rows($query);
                        if($no==0)
                        {
                            ;
                        }
                        else
                        {
                            echo"
                            <table class='table table-bordered table-hover table-striped'>
                            <tr>
                                <th>NAME</th>
                                <th>ADMISSION NUMBER</th>
                                <th>DEPARTMENT</th>
                                <th>BASKET</th>
                                <th></th>
                            </tr>
                            ";
                            while($data=mysqli_fetch_array($query))
                            {
                                $studentid=$data['idnumber'];
                                $chek=mysqli_query($conn,"select * from student_details where year='$year' && idnumber='$studentid'");
                                $kech=mysqli_fetch_array($chek);
                                echo"
                                <tr>
                                    <td>".$kech['name']."</td>
                                    <td>".$kech['idnumber']."</td>
                                    <td>".$kech['department']."</td>
                                    <td>".$data['basket']."</td>
                                    <td>
                                    <form action='ictclearbasket.php' method='post'>
                                    <input type='hidden' name='incre' value='".$data['incre']."'/> 
                                    <input type='submit' value='Pay' class='btn btn-info'/>
                                    </form>
                                    </td>
                                </tr>
                                ";
                            }
                            echo"
                            </table>
                            ";
                        }
                        ?>
     
     
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
    <!-- jQuery -->
    <script src="../jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    
</body>

</html>
 
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
