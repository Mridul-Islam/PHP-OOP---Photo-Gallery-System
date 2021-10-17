<?php include("includes/admin_header.php"); ?>

<?php

if(!$session->is_signed_in()){
    redirect("login.php");
}


$message = "";
// form submission
if(isset($_POST['submit'])){
    $photo = new Photo();

    $photo->title = $_POST['title'];
    $photo->set_file($_FILES['file_upload']);

    if($photo->save()){
        $message = "Photo Uploaded successfully";
    }
    else{
        $message = join("<br>", $photo->errors);
    }
}




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
                            Upload
                            <small>Subheading</small>
                        </h1>
                        <?php

                        echo $message;

                        ?>

                        <div class="col-md-10">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="file_upload" class="form-control">
                                </div>
                                <input type="submit" name="submit" class="btn btn-primary">
                            </form>
                        </div>


                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>

        <!-- /#page-wrapper -->

  <?php include("includes/admin_footer.php"); ?>