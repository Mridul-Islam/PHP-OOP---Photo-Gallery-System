<?php include("includes/admin_header.php"); ?>

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
                            <small>Subheading</small>
                        </h1>

                        <?php


                        // $users_found = User::find_all_users();

                        // foreach($users_found as $user){
                        //     echo $user->id . "<br>";
                        //     echo $user->first_name . "<br>";
                        //     echo $user->last_name . "<br>";
                        // }





                        $user = User::find_user_by_id(1);

                        echo $user->id . "<br>";
                        echo $user->username . "<br>";
                        echo $user->password . "<br>";
                        echo $user->first_name . "<br>";
                        echo $user->last_name . "<br>";




                        ?>

                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>

        <!-- /#page-wrapper -->

  <?php include("includes/admin_footer.php"); ?>