<?php include("includes/admin_header.php"); ?>


<?php

if($session->is_signed_in()){
	redirect("index.php");
}

if(isset($_POST['login'])){
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);

	
	// method to check database for this user
	$user_found = User::verify_user($username, $password);

	if($user_found){
		$session->login($user_found);
		redirect("index.php");
	}
	else{
		$the_message = "Your username or password are incorrect";
	}
}
else{
	$username    = "";
	$password    = "";
	$the_message = "";
}



?>



<div class="col-md-8 log-in-form col-md-offset-1">
	<div class="col-md-10 col-md-offset-1">
		<h4 class="bg-danger"><?php echo $the_message; ?></h4>
		<h2 class="text-center">Log In</h2>
		<form id="login-id" action="" method="post">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" class="form-control" name="username" value="<?php echo htmlentities($username); ?>" >
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" class="form-control" name="password" value="<?php //echo htmlentities($password); ?>">	
			</div>
			<div class="form-group">
				<input type="submit" name="login" value="Submit" class="btn btn-primary">
			</div>
		</form>
	</div>
</div>


