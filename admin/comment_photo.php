<?php include("includes/admin_header.php"); ?>

<?php if(!$session->is_signed_in()) { redrect("login.php");   }    ?>

<?php  

if(empty($_GET['id'])){
    redirect("photos.php");
}

if(isset($_GET['id'])){
    $photo_id = $_GET['id'];
}

$photo = Photo::find_by_id($photo_id);

$photo_comments = Comment::find_the_comments($photo_id);



?>

        <!-- Navigation -->
            
            <?php include("includes/admin_top_nav.php"); ?>


            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->

            <?php include("includes/admin_side_nav.php"); ?>


            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">

                            <?php echo $photo->title;    ?>
                            
                            <small>Comments</small>
                        </h1>
                        <div class="col-md-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Photo Id</th>
                                        <th>Comment Id</th>
                                        <th>Author</th>
                                        <th>Body</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($photo_comments as $photo_comment){  ?>

                                <tr>
                                    <td><?php echo $photo_comment->photo_id; ?></td>
                                    <td><?php echo $photo_comment->id; ?></td>
                                    <td><?php echo $photo_comment->author; ?></td>
                                    <td><?php echo $photo_comment->body; ?></td>
                                    <td><a href="delete_photo_comment.php?id=<?php echo $photo_comment->id;?>" class="btn btn-danger">Delete</a></td>
                                </tr>
                                
                                <?php 
                                } 

                                ?>


                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>

        <!-- /#page-wrapper -->

  <?php include("includes/admin_footer.php"); ?>