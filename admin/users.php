<?php include("includes/admin_header.php"); ?>

<?php if(!$session->is_signed_in()) { redirect("login.php"); }     ?>

<?php  

$users = User::find_all();



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
                            Users
                            <small>Information</small>
                        </h1>

                        <a href="add_user.php" class="btn btn-primary btn-lg">Add User</a>
                        <hr />

                        <div class="col-md-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Photo</th>
                                        <th>Username</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($users as $user){  ?>

                                <tr>
                                    <td><?php echo $user->id; ?></td>
                                    <td><img style="width: 180px; height: 100px;" class="admin_user_thumbnail" src='<?php echo $user->image_path_and_placeholder(); ?>' alt='' /></td>
                                    <td><?php echo $user->username; ?></td>
                                    <td><?php echo $user->first_name; ?></td>
                                    <td><?php echo $user->last_name; ?></td>
                                    <td><a href="edit_user.php?edit_u_id=<?php echo $user->id; ?>" class="btn btn-primary">Edit</a></td>
                                    <td><a href="delete_user.php?u_id=<?php echo $user->id;?>" class="btn btn-danger">Delete</a></td>
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