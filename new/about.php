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
<!-- Homepage Only Scripts -->
<script type="text/javascript" src="layout/scripts/jquery.cycle.min.js"></script>
<script type="text/javascript">
$(function() {
    $('#hpage_slider').after('<div id="fsn"><ul id="fs_pagination">').cycle({
        timeout: 5000,
        fx: 'fade',
        pager: '#fs_pagination',
        pause: 1,
        pauseOnPagerHover: 0
    });
});
</script>
<script type="text/javascript" src="layout/scripts/piecemaker/swfobject/swfobject.js"></script>
<script type="text/javascript">
var flashvars = {};
flashvars.cssSource = "layout/scripts/piecemaker/piecemaker.css";
flashvars.xmlSource = "layout/scripts/piecemaker/piecemaker.xml";
var params = {};
params.play = "false";
params.menu = "false";
params.scale = "showall";
params.wmode = "transparent";
params.allowfullscreen = "true";
params.allowscriptaccess = "sameDomain";
params.allownetworking = "all";
swfobject.embedSWF('layout/scripts/piecemaker/piecemaker.swf', 'piecemaker', '960', '430', '10', null, flashvars, params, null);
</script>
</head>
<body id="top">
<div class="wrapper col1">
  <div id="topbar" class="clear">
    <ul>
      <li><a href="http://registration.ueab.ac.ke">Online registration</a></li>
      <li><a href="http://signout.ueab.ac.ke">Online Signout</a></li>
	  <li><a href="http://clearance.ueab.ac.ke">Online Clearance</a></li>
    </ul>
	<form action="loginconfirm.php" method="post" style="float:right;text-align:right;">		
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input style="border:solid #999999;background-color:#FFFFFF;color:#0000CC;text-decoration:bold;width:15em;text-align:center;" type="text" name="username" placeholder="enter your username" required="required" />&nbsp;&nbsp;&nbsp;&nbsp;
	<input style="border:solid #999999;background-color:#FFFFFF;color:#0000CC;text-decoration:bold;width:15em;text-align:center;" type="password" name="password" placeholder="enter your password" required="required" />&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit" value="Login" style="background-color:#999999;" /><br /><br />
	Not yet Registered for graduation? <a style="color:#FFFFFF;" href="studentsignup.php">Sign Up Here</a>
	</form>
  </div>
</div>
<div class="wrapper col2">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="index.php"><?php echo $title; ?></a></h1>
      <p><?php echo $subtitle; ?></p>
    </div>
    <div id="topnav">
      <ul>
        <li class="last"><a href="contact.php">Contact Us</a><span>give us your feedback</span></li>
        <li class="active"><a href="about.php">About Us</a><span>More about system</span></li>
        <li><a href="index.php">Homepage</a><span>Clearance Home</span></li>
      </ul>
    </div>
  </div>
</div>
<div class="wrapper col3">
  <div id="featured_slide"> 
    <div id="piecemaker"><img src="images/demo/piecemaker/960x360.gif" alt="" /></div>
  </div>
</div>
<div class="wrapper col4">
  <div id="container" class="clear"> 
  	<h1>About Us</h1>
	<p>Ueab clearance system enables students and clearance officers to process graduation clearance requests in an highly automated process</p>
    <div class="clear"></div>
  </div>
</div>
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2014-<?php echo date("Y");?> - All Rights Reserved - <a href=""><?php echo $copyright; ?></a></p>
    <p class="fl_right">Designed by <a target="_blank" href="<?php echo $website; ?>" title="<?php echo $developed; ?>"><?php echo $developed; ?></a></p>
  </div>
</div>
</body>
</html>