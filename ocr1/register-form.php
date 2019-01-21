<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
	<link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/form-register.css">
</head>
<body>
	<header>
		<h1>REGISTER HERE</h1>
    </header>
	<div class="main-content">
		<form class="form-register" method="post" action="">
			<div class="form-register-with-email">
				<div class="form-white-background">
					
					<div class="form-title-row">
                        <h1>Create an account</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Name</span>
                            <input type="text" name="u_name" required="required"/>
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Email</span>
                            <input type="email" name="u_email" required="required"/>
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Password</span>
                            <input type="password" name="u_pass" required="required"/>
                        </label>
                    </div>
					
					<div class="form-row">
                        <label>
                            <span>Country</span>
                            <select name="u_country">
								<option>Select....</option>
								<option>India</option>
								<option>China</option>
								<option>Japan</option>
								<option>New York</option>
								<option>Melbourne</option>
							</select>
                        </label>
                    </div>
					
					<div class="form-row">
                        <label>
                            <span>Gender</span>
                            <select name="u_gender">
								<option>Select....</option>
								<option>Male</option>
								<option>Female</option>
							</select>
                        </label>
                    </div>
					
					<div class="form-row">
                        <label>
                            <span>Birthday</span>
                            <input type="date" name="u_birthday" required="required"/>
                        </label>
                    </div>

                    <div class="form-row">
                        <label class="form-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>I agree to the <a href="#">terms and conditions</a></span>
                        </label>
                    </div>

                    <div class="form-row">
                        <button name="sign_up" onclick="myFunction()">Register</button>
						<!-- <script>
							function myFunction() {
								alert("Account Created Succesfully!!");
							}
						</script> -->
                    </div>
				</div>
				<a href="login-form.php" class="form-log-in-with-existing">Already have an account? Login here &rarr;</a>
			</div>

            <div class="form-sign-in-with-social">

                <div class="form-row form-title-row">
                    <span class="form-title">Sign in with</span>
                </div>
				<a href="#" class="form-google-button">Google</a>
                <a href="#" class="form-facebook-button">Facebook</a>
                <a href="#" class="form-twitter-button">Twitter</a>
			</div>
		</form>
		<?php include("insert_user.php");?>
	</div>
</body>
</html>