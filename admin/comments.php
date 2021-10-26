<?php include("includes/admin_header.php"); ?>

<?php if(!$session->is_signed_in()) { redrect("login.php");   }    ?>

<?php  

$comments = Comment::find_all();



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
                            All 
                                <small>Comments</small>
                        </h1>

                        <p class="bg-success text-center"><?php echo $message; ?></p>

                        <div class="col-md-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Photo ID</th>
                                        <th>Author</th>
                                        <th>Body</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($comments as $comment){  ?>

                                <tr>
                                    <td><?php echo $comment->id; ?></td>
                                    <td><?php echo $comment->photo_id; ?></td>
                                    <td><?php echo $comment->author; ?></td>
                                    <td><?php echo $comment->body; ?></td>
                                    <td><a href="delete_comment.php?id=<?php echo $comment->id;?>" class="btn btn-danger delete_link">Delete</a></td>
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