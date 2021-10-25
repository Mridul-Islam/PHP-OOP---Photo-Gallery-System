<?php include("includes/init.php"); ?>

<?php if(!$session->is_signed_in()) {  redirect("login.php");  }   ?>

<?php 

if(empty($_GET['id'])){
	redirect("users.php");
	$session->message("The user id was not founded");
}

if(isset($_GET['id'])){
	$user_id = $_GET['id'];	
}

$user = User::find_by_id($user_id);

if($user){
	$user->delete_user();
	redirect("users.php");
	$session->message("The -- {$user->username} -- user has been deleted");
}



?>