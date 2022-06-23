<?php 
ob_start();
include('header.php');
include_once("db_connect.php");
session_start();
if(isset($_SESSION['user_id'])!="") {
	header("Location: index.php");
}
if (isset($_POST['login'])) {
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$result = mysqli_query($conn, "SELECT * FROM users WHERE email = '" . $email. "' and pass = '" . md5($password). "'");
	if ($row = mysqli_fetch_array($result)) {
		$_SESSION['user_id'] = $row['uid'];
		$_SESSION['user_name'] = $row['user'];		
		header("Location: index.php");
	} else {
		$error_message = "Email sau parola gresita";
	}
}
?>
<title>Login</title>
<script type="text/javascript" src="script/ajax.js"></script>
<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
				<fieldset>
					<legend>Logare</legend>						
					<div class="form-group">
						<label for="name">Email</label>
						<input type="text" name="email" placeholder="dan@gmail.com" required class="form-control" />
					</div>	
					<div class="form-group">
						<label for="name">Parola</label>
						<input type="password" name="password" placeholder="parola" required class="form-control" />
					</div>	
					<div class="form-group">
						<input type="submit" name="login" value="Login" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<span class="text-danger"><?php if (isset($error_message)) { echo $error_message; } ?></span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
		<a href="register.php">Inregistrare</a>
		</div>
	</div>
		
		
	<div style="margin:50px 0px 0px 0px;">
	<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="index.php" title="">Back to main page</a>						
	</div>
</div>
