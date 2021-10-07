<?php include("includes/admin_header.php"); ?>

<?php if(!$session->is_signed_in()) { redirect("login.php");  }          ?>

<?php 

$all_photo = Photo::find_all();  


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
                            Photos
                            <small>Subheading</small>
                        </h1>
                        
                        <div class="col-md-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Id</th>
                                        <th>File Name</th>
                                        <th>Tittle</th>
                                        <th>Size</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($all_photo as $photo){  ?>

                                <tr>
                                    <td class='col-md-4 col-sm-4 col-xs-4 col-lg-4'><img class='col-md-10 col-sm-10 col-xs-10 col-lg-10' src='<?php echo $photo->picture_path(); ?>' alt='' />
                                        <div class="pictures_link">
                                            <a class='btn' href="delete_photo.php?delete_id=<?php echo $photo->id; ?>">Delete</a>
                                            <a class='btn' href="">Edit</a>
                                            <a class='btn' href="">View</a>
                                        </div>
                                    </td>
                                    <td><?php echo $photo->id; ?></td>
                                    <td><?php echo $photo->filename; ?></td>
                                    <td><?php echo $photo->title; ?></td>
                                    <td><?php echo $photo->size; ?></td>
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