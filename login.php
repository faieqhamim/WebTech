<?php 
	include 'main_header.php';
	require_once 'controllers/LoginController.php';
?>

<!--login starts -->

<title>Online Garage System/login</title>
<div class="center-login">
	<h1 class="text text-center">Login</h1>
	<form action="" method="post" class="form-horizontal form-material">
		<div class="form-group">
			<h4 class="text">Username</h4> 
			<input type="text" name="username" value="<?php echo $username;?>" class="form-control">
			<span style="color:red"><?php echo $err_username;?></span>
		</div>
		<div class="form-group">
			<h4 class="text">Password</h4> 
			<input type="password" name="password" id="myInput" class="form-control">
			<input type="checkbox" onclick="myFunction()">Show Password

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
		</div>
		<div class="form-group text-center">
			
			<input type="submit" name="login" class="btn btn-danger" value="Login" class="form-control">
		</div>
		<div class="form-group text-center">
			
			<a href="signup.php" >Not registered yet? Sign Up</a>
		</div>
</div>

<!--login ends -->
<?php include 'main_footer.php';?>