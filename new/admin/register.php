<?php
include('connection.php');
?>
<!DOCTYPE html>


<head>
	
</head>
<body>
			<div class="login-form">
				<form action="reg2.php" method="post">				
					<div class="">
						<p>Username </p>
						<input type="text" class="name" name="username" required="" />
					</div>
					<div class="">
						<p>Usertype </p>
						<input type="text" class="name" name="usertype" required="" />
					</div>
					  
					 
					<div class="">
						<p>Password</p>
						<input type="password" class="password" name="password" id="password" required="" />
					</div>
					<div class="">
						<p>Confirm Password</p>
						<input type="password" class="password" name="password2" id="password2" required="" />
					</div>
					<label class="anim">
						<input type="checkbox" class="checkbox">
						<span>I Accept Terms & Conditions</span>
					</label>
					<input type="submit" value="Register">
				</form>
			</div>

		</div>
	</div>

	 
	 
	<!-- //here ends scrolling icon -->
	<!-- smooth scrolling -->
	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->
	<!-- //js-files -->

</body>

</html>