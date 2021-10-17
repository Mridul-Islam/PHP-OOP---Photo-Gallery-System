<?php include("includes/init.php"); ?>

<?php if(!$session->is_signed_in()) {  redirect("login.php");  }   ?>

<?php 

if(empty($_GET['id'])){
    redirect("comment_photo.php");
}

if(isset($_GET['id'])){
    $photo_comment_id = $_GET['id'];  
}

$photo_comment = Comment::find_by_id($photo_comment_id);

if($photo_comment){
    $photo_comment->delete();
    redirect("comment_photo.php?id={$photo_comment->photo_id}");
}
else{
    redirect("comment_photo.php?id={$photo_comment->photo_id}");
}



?>
