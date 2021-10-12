<?php include("includes/admin_header.php"); ?>

<?php if(!$session->is_signed_in()) { redirect("login.php");  }          ?>

<?php

$user = New User();

if(isset($_POST['add_user'])){
    if($user){
        $user->username   = $database->escape_string($_POST['username']);
        $user->password   = $database->escape_string($_POST['password']);
        $user->first_name = $database->escape_string($_POST['first_name']);
        $user->last_name  = $database->escape_string($_POST['last_name']);
        $image            = $_FILES['image'];

        $user->set_file($image);

        $user->upload_image();
        $user->save();
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
                        <h1 class="page-header text-center">
                            Add
                            <small>User</small>
                        </h1>
                        
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="form-group"> 
                                    <label for="username">Username</label>
                                    <input type="text" name="username" id="username" class="form-control">
                                </div>
                                <div class="form-group"> 
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <div class="form-group"> 
                                    <label for="first_name">First Name</label>
                                    <input type="text" name="first_name" id="first_name" class="form-control">
                                </div>
                                <div class="form-group"> 
                                    <label for="last_name">Last Name</label>
                                    <input type="text" name="last_name" id="last_name" class="form-control">
                                </div>
                                <div class="form-group"> 
                                    <label for="image">Image</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <input type="submit" name="add_user" value="Add User" class="btn btn-primary btn-lg">
                                </div>
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