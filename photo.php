<?php include("includes/header.php"); ?>

<?php

if(empty($_GET['id'])){
    redirect("index.php");
}

$photo = Photo::find_by_id($_GET['id']);


if(isset($_POST['create_comment'])){
    $author = trim($_POST['author']);
    $body   = trim($_POST['body']);

    $new_comment = Comment::create_comment($photo->id, $author, $body);

    if($new_comment && $new_comment->save()){
        redirect("photo.php?id={$photo->id}");
    }
    else{
        $message = "There was some problems to saving";
    }

}
else{
    $author = "";
    $body   = "";
}

$comments = Comment::find_the_comments($photo->id);




?>


    <!-- Navigation -->
    <?php include("includes/navigation.php"); ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-12">

                <!-- Blog Post -->

                <!-- Title -->
                <h1 class="text-center"><?php echo $photo->title; ?></h1>

                <hr>

                <!-- Date/Time -->
                <!-- <p><span class="glyphicon glyphicon-time"></span> Posted on August 24, 2013 at 9:00 PM</p> -->

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive thumbnail" src="admin/<?php echo $photo->picture_path(); ?>" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead"><?php echo $photo->caption; ?></p>

                <p><?php echo $photo->description; ?></p>

                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form" action="" method="post">
                        <div class="form-group">
                            <label>Your Name:</label>
                            <input type="text" name="author" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Write something here:</label>
                            <textarea class="form-control" name="body" rows="4" class="form-control"></textarea>
                        </div>
                        <button type="submit" name="create_comment" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                <hr>

                <?php  foreach ($comments as $comment):   ?>

                <!-- Comment -->
                <div class="media">
                    <a href="pull-left" href="#">
                        <img src="" class="media-object" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $comment->author; ?>
                            <small> Time and Date</small>
                        </h4>
                        <?php echo $comment->body; ?>
                    </div>
                </div>

            <?php endforeach; ?>


            </div>


            <!-- Blog Sidebar Widgets Column -->
            
            <!-- Blog Sidebar Widgets Column -->
            <!-- <div class="col-md-4"> -->
            
                 <?php //include("includes/sidebar.php"); ?>

        </div>
        <!-- /.row -->

<?php include("includes/footer.php"); ?>
