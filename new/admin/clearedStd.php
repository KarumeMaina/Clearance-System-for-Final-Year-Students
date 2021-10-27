<?php
include("MainMenu.php");
include("../../functions.php");
if (isset($_GET['id'])) {
  $Code =$_GET['id'];
  $sql =mysqli_query($db,"DELETE FROM  student_details 
    WHERE id='$Code'");
  if ($sql) {
   echo "<script>alter('data deleted');</script>"; 
 }
 }

?>
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
<div id="page-wrapper">
 <div class="container-fluid">
 <div class="row">
 <div class="col-lg-12">
 <h1 class="page-header"> List of Cleared Students </h1>
</div>
</div>
                    <!-- /.row -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading">
  Students Clearance Management 
</div>
             <!-- /.panel-heading -->
 <div class="panel-body">
<div class="table-responsive">
<table class="table table-hover" id="usermanagetable">
<thead>
<tr>
<th>S/No</th>
<th>StudentName</th>
<th>Regno</th>
<th>Course</th>
<th>Department</th>
<th>Action</th>
</tr>
</thead>
<?php
$sql=mysqli_query($db,"SELECT *from  student_details where  clearance_status='1';");
$count=1;
while ($rows=mysqli_fetch_array($sql)){?>
<tbody><tr>
    <td><?php echo $count;?></td>
    <td><?php echo $rows['name'];?></td>
    <td><?php echo $rows['idnumber'];?></td>
    <td><?php echo $rows['course']; ?></td>
    <td><?php echo $rows['department']?></td>
   
    <!-- <td><a href="updatesstdclearance.php"><span class="fa fa-edit">Update Student</span></a>
    </td> -->
    <td>
<!-- <a href="updatesstdclearance.php?id=<?php echo $row->id;?>"><i class="fa fa-edit"></i></a>&nbsp; -->

   <a href="clearedStd.php?id=<?php echo $rows['id'];?>" onclick="return confirm('Are you sure you want yo Delete')" <i class="fa fa-trash">Delete</i></a>
    </td>

    </tr>
 
</tbody>
<?php $count=$count+1;} ?>
 </table>
</div>  
<!-- <button onclick="window.Print()">print</button>
 -->  <footer style="text-align:left;background-color:#000000;color:#FFFFFF;" class="  navbar-fixed-bottom">
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
     
                   

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
            