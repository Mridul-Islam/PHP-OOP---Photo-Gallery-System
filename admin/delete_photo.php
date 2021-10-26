<?php include("includes/init.php"); ?>

<?php if(!$session->is_signed_in()) { redirect("login.php"); } ?>

<?php

if(empty($_GET['id'])){
    redirect("photos.php");
}

if(isset($_GET['id'])){
    $photo_id = $_GET['id'];
}

$photo = Photo::find_by_id($photo_id); 

if($photo){
    $photo->delete_photo();
    redirect("photos.php"); 
    $session->message("The -- {$photo->filename} -- has been deleted");
}
else{
    redirect("photos.php");
}



?>
