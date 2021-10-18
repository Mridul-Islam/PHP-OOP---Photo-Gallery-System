<?php include("includes/init.php"); ?>

<?php if(!$session->is_signed_in()) { redirect("login.php"); } ?>

<?php

if(empty($_GET['delete_id'])){
    redirect("photos.php");
}

if(isset($_GET['delete_id'])){
    $photo_id = $_GET['delete_id'];
}

$photo = Photo::find_by_id($photo_id); 

if($photo){
    $photo->delete_photo();
    redirect("photos.php");    
}
else{
    redirect("photos.php");
}



?>
