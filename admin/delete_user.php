<?php include("includes/init.php"); ?>

<?php if(!$session->is_signed_in()) {  redirect("login.php");  }   ?>

<?php 

if(empty($_GET['u_id'])){
	redirect("users.php");
}

if(isset($_GET['u_id'])){
	$user_id = $_GET['u_id'];	
}

$user = User::find_by_id($user_id);

if($user){
	$user->delete_user();
	redirect("users.php");
}



?>