<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="shortcut icon" type="img/jpg" href="new/admin/img/logo1.jpg">
<head>
  <?php
  	include("connection.php");
	// $query=mysqli_query($conn,"select * from clearance_basics");
	// $wata=mysqli_fetch_array($query);
	// $copyright=$wata['rights'];
	// $developed=$wata['developed'];
	// $website=$wata['website'];
	// $title=$wata['title'];
	// $subtitle=$wata['subtititle'];
	if(isset($_POST['submit']))
	{
		if(!empty($_POST['fullname']) && !empty($_POST['idnumber']) && !empty($_POST['password']))
		{
			$fullname  =$_POST['fullname'];
			$idnumber  =$_POST['idnumber'];
			$password  =$_POST['password'];

			$query = "INSERT INTO user(fullname, idnumber, password)"."VALUES('$fullname','$idnumber','$password')";

			$run = mysqli_query($conn,$query) or die(mysqli_error($conn));

		if($run){
			echo "Form submitted";
		}	
		else{
			echo "Form not submitted";

		}
		// // else{
		// 	echo"all fields required";

		// }
		$conn->close();
		}

	}
  ?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<link rel="icon" type="image/ico" href="images/icon.ico" />
</head>
<body id="top">
<div class="wrapper col1">
  
</div>
 
<div class="wrapper col4">
  <div id="container" class="clear"> 
  	<fieldset style="width:80%;"  >
  	<legend><h1 style="color:#000000;">GRADUATING  STUDENTS SIGN UP</h1></legend>
	<center>
	<form action="studentsignupconfirm.php" method="post">
	<font size="4" color="#000000">enter your full name</font><br/>
	<input required="required" type="text" placeholder="full name goes here" name="fullname" style="color:#0000FF;width:40%;height: 9%;border:grey 2px solid;text-align:center;"/><br/><br />
	<font size="4" color="#000000">enter your admission number</font><br/>
	<input required="required" type="text" placeholder="admission number goes here" name="idnumber" style="color:#0000FF;width:50%;border:grey 2px solid;text-align:center;"/><br/><br />
	
	<font size="4" color="#000000">Choose your Course</font><br/>
	<select name="course" style="color:#666666;width:40%;border:grey 2px solid;text-align:center;">
	<option>Computer Science</option>
	<option>Information Technology</option>
	<option>Computer Technology</option>
	<option>Forensic and Security</option>
	</select><br/><br/>
	<font size="4" color="#000000">Choose your residence</font><br/>
	<select name="residence" style="color:#666666;width:40%;border:grey 2px solid;text-align:center;">
	<option>oncampus</option>
	<option>offcampus</option>
	</select><br/><br/>
	<font size="4" color="#000000">Choose your department</font><br/>
	<select name="department" style="color:#666666;width:40%;border:grey 2px solid;text-align:center;">
	<option>department computer science </option>
	<option>department information systems </option>
	</select><br/><br/>
	<font size="4" color="#000000">enter your password</font><br/>
	<input required="required" type="password" placeholder="password goes here" name="password" style="color:#0000FF;width:40%;border:grey 2px solid;text-align:center;"/><br/><br />
	<input type="submit" value="Request SignUp" />
	</form>
	</center>
	</fieldset>
    <div class="clear"></div>
  </div>
</div>
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy;  <?php echo date("Y");?> - All Rights Reserved - <a href=""><?php echo $copyright; ?></a></p>
    <p class="fl_right">Designed by <a target="_blank" href="<?php echo $website; ?>" title="<?php echo $developed; ?>"><?php echo $developed; ?></a></p>
  </div>
</div>
</body>
</html>