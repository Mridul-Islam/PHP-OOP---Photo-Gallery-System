<?php include("includes/admin_header.php"); ?>
<?php include("includes/photo_library_modal.php"); ?>

<?php if(!$session->is_signed_in()) { redirect("login.php");  }          ?>

<?php

if(isset($_GET['id'])){
    $edit_id = $_GET['id'];

    $edit_user = User::find_by_id($edit_id);

}
else{
    redirect("users.php");
}



if(isset($_POST['update_user'])){
    if($edit_user){
        $edit_user->username   = $database->escape_string($_POST['username']);
        $edit_user->password   = $database->escape_string($_POST['password']);
        $edit_user->first_name = $database->escape_string($_POST['first_name']);
        $edit_user->last_name  = $database->escape_string($_POST['last_name']);
        $image            = $_FILES['image'];

        if(empty($image)){
            $edit_user->save();

            redirect("users.php"); 
            $session->message("The -- {$edit_user->id} -- no user has been updated");
        }
        else{
            $edit_user->set_file($image);
            $edit_user->upload_image();
            $edit_user->save();

            //redirect("edit_user.php?id={$edit_id}");
            redirect("users.php");
            $session->message("The -- {$edit_user->id} -- no user has been updated");
        }
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
                            User
                            <small>Information</small>
                        </h1>
                        <div class="col-md-4 user_image_box">
                        <a href="#" data-toggle="modal" data-target="#photo-library"><img class="img-responsive" src="<?php echo $edit_user->image_path_and_placeholder(); ?>" alt=""></a>
                        </div>
                        
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="col-md-6">
                                <div class="form-group"> 
                                    <label for="username">Username</label>
                                    <input type="text" name="username" id="username" class="form-control" value="<?php echo $edit_user->username; ?>">
                                </div>
                                <div class="form-group"> 
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" value="<?php echo $edit_user->password; ?>">
                                </div>
                                <div class="form-group"> 
                                    <label for="first_name">First Name</label>
                                    <input type="text" name="first_name" id="first_name" class="form-control" value="<?php echo $edit_user->first_name; ?>">
                                </div>
                                <div class="form-group"> 
                                    <label for="last_name">Last Name</label>
                                    <input type="text" name="last_name" id="last_name" class="form-control" value="<?php echo $edit_user->last_name; ?>">
                                </div>
                                <div class="form-group"> 
                                    <label for="image">Image</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>
                                <input type="submit" name="update_user" value="Update User" class="btn btn-primary btn-lg">
                                <a id='user-id' href="delete_user.php?id=<?php echo $edit_user->id; ?>" class="btn btn-danger pull-right btn-lg">Delete</a>
                            </div>
                            
                        </form>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>

        <!-- /#page-wrapper -->

  <?php include("includes/admin_footer.php"); ?>
