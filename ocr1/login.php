<?php
	session_start();
	include("includes/connection.php");
	if(isset($_POST['login'])){
		$email=mysqli_real_escape_string($con,$_POST['email']);
		$pass=mysqli_real_escape_string($con,$_POST['pass']);
		$select_user="select * from users where user_email='$email' AND user_pass='$pass' AND status='verified'";
		$query=mysqli_query($con,$select_user);
		$check_user=mysqli_num_rows($query);
		if($check_user==1){
			$_SESSION['user_email']=$email;
			echo "<script>alert('You are logged in!!');</script>";
			echo "<script>window.open('index.php','_self')</script>";
		}
		else{
			echo "<script>alert('Incorrect Email or Password')</script>";
		}
	}
?>