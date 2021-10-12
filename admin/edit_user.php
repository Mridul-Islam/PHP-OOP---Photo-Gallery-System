<?php include("includes/admin_header.php"); ?>

<?php if(!$session->is_signed_in()) { redirect("login.php");  }          ?>

<?php

if(isset($_GET['edit_u_id'])){
    $edit_id = $_GET['edit_u_id'];

    $user = User::find_by_id($edit_id);

    if(isset($_POST['update_user'])){
        if($user){
            $user->username   = $database->escape_string($_POST['username']);
            $user->password   = $database->escape_string($_POST['password']);
            $user->first_name = $database->escape_string($_POST['first_name']);
            $user->last_name  = $database->escape_string($_POST['last_name']);
            $image            = $_FILES['image'];

            if(empty($image)){
                $user->save();
            }
            else{
                $user->set_file($image);
                $user->upload_image();
                $user->save();

                redirect("edit_user.php?edit_u_id={$edit_id}");
            }
        }
    }
}
else{
    redirect("users.php");
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
                            Edit
                            <small>User</small>
                        </h1>

                        <div class="col-md-4">
                            <img class="img-responsive" src="<?php echo $user->image_path_and_placeholder(); ?>" alt="">
                        </div>
                        
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="col-md-6">
                                <div class="form-group"> 
                                    <label for="username">Username</label>
                                    <input type="text" name="username" id="username" class="form-control" value="<?php echo $user->username; ?>">
                                </div>
                                <div class="form-group"> 
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" value="<?php echo $user->password; ?>">
                                </div>
                                <div class="form-group"> 
                                    <label for="first_name">First Name</label>
                                    <input type="text" name="first_name" id="first_name" class="form-control" value="<?php echo $user->first_name; ?>">
                                </div>
                                <div class="form-group"> 
                                    <label for="last_name">Last Name</label>
                                    <input type="text" name="last_name" id="last_name" class="form-control" value="<?php echo $user->last_name; ?>">
                                </div>
                                <div class="form-group"> 
                                    <label for="image">Image</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>
                                <input type="submit" name="update_user" value="Update User" class="btn btn-primary btn-lg">
                                <a href="delete_user.php?u_id=<?php echo $user->id; ?>" class="btn btn-danger pull-right btn-lg">Delete</a>
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