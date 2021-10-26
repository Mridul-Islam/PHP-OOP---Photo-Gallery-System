<?php include("includes/init.php"); ?>

<?php if(!$session->is_signed_in()) {  redirect("login.php");  }   ?>

<?php 

if(empty($_GET['id'])){
	redirect("comments.php");
}

if(isset($_GET['id'])){
	$comment_id = $_GET['id'];	
}

$comment = Comment::find_by_id($comment_id);

if($comment){
	$comment->delete();
	redirect("comments.php");
	$session->message("The Comment Id = {$comment->id}  has been deleted");
}
else{
	redirect("comments.php");
}



?>