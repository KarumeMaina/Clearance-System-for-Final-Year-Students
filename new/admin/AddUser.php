<?php
 include("MainMenu.php");
  

 ?>
<!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
                	  <ol class="breadcrumb">
					  <li><a href="#">Home</a></li>
					  <li><a href="#">Admin</a></li>
					  <li class="active">Data</li>
					</ol>
                </div>
            </div>
            <div class="panel panel-default">
		  <div class="panel-heading">Add New User</div>
		  <div class="panel-body">
		  	<div class="header">
		<h4>Admin -  admin</h4>
	  
	<form action="reg2.php" method="post">				
					<div class="form-group"> 
				 <label>UserName</label>
      <input type="text" name="username"  required="" class="form-control"> 
        
      
     </div>
      	<div class="form-group">
        <label>Password </label>
      <input type="text" name="Password" required="" class="form-control"> 
     </div>
				<div class="form-group">
					 
					<input type="submit" value="Add" style="background-color:#aaa ">
				</form></div>
			
		  </div>
		</div>
        </div> <!-- end of container -->
    </div><!--     end of page warp -->
  <footer style="text-align:left;background-color:#000000;color:#FFFFFF;" class="  navbar-fixed-bottom">
          <div style="text-align:center;" class="container-fluid">&copy; <?php echo date("Y");?> <a href=""><?php echo $title; ?></a> 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          Design by <a href="<?php echo $website; ?>" target="_blank"><?php echo $developed; ?></a>.</div>
          </footer>