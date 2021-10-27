
<!DOCTYPE html>
<html lang="zxx">

<head>
	 
	<!-- //meta-tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

</head>

<body>
	
	 
	<!-- short-->
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">
			<ul class="short_ls">
				<li>
					<a href="index.html">Home</a>
					<span>| |</span>
				</li>
				<li>Register</li>
			</ul>
		</div>
	</div>
	<!-- //short-->
	<div class="register-form-main">
		<div class="container">
			<div class="title-div">
				<h3 class="tittle">
					<span>R</span>egister
					<span>F</span>orm
				</h3>
				<div class="tittle-style">

				</div>
			</div>
			<div class="login-form">
				<form action="new/studentsignupconfirm.php" method="post">
				 <label>Your Name</label>
      <input type="text" name="Name" class="form-control"><br>
       <label>Your Regno </label>
      <input type="text" name="Regno" class="form-control"><br>
      			<label>Clearing Section/Deparment</label>
      <select name="dept" class="form-control" required>
        <option>Choose your Department</option>
        <option value="Computeter Science"  >Computeter Science </option>
          <option value="Science_workshop"  >Information Technology</option>
            
        </select>
        <br>
      <label>Choose Course</label>
      <select name="Course" class="form-control" required>
        <option>Choose your course</option>
        <option>Computer Science</option>
	<option>Information Technology</option>
	<option>Computer Technology</option>
	<option>Forensic and Security</option>
        </select>
        <br>
        			<label>Choose Residence</label>
      <select name="Residence" class="form-control" required>
         
        <option>oncampus</option>
	<option>offcampus</option> 
        </select>
        <br>
        <label>Password </label>
      <input type="text" name="password_1" class="form-control"><br>
      <label>Confrm Password </label>
      <input type="text" name="password_2" class="form-control"><br>
      			 
					<input type="submit" value="Register">
				</form>
			</div>

		</div>
	</div>

	< !-- footer -->
	<div class="mkl_footer">
		 
		<div class="footer-copy-right">
			<div class="container">
				<div class="allah-copy">
					<p>© 2018 Online Clearance. All rights reserved | Design by Mutai Felix
					</p>
				</div>
				<div class="footercopy-social">
					<ul>
						<li>
							<a href="#">
								<span class="fa fa-facebook"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-twitter"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-rss"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-vk"></span>
							</a>
						</li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
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
	<!-- password-script -->
	 

</body>

</html>