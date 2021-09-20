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

                        

                        //while($row = mysqli_fetch_assoc($all_user)) {
                            //$user_id  = $all_user['id'];
                            //$username = $all_user['username'];


                           // echo "<a href='users.php?user_id={$all_user->id}'> {$all_user->username} </a> . <br>";
                        //}


                        //if(isset($_GET['user_id'])){
                            //$user_id = $database->escape_string($_GET['user_id']);

                            // $result = User::find_single_user(1);

                            // $user = User::instantiation($result);
                            
                            // echo $user->id . "<br>";
                            // echo $user->username . "<br>";
                            // echo $user->password . "<br>";
                            // echo $user->first_name . "<br>";
                            // echo $user->last_name . "<br>";
                            
                        //}
                        $all_user = User::find_all_user();
                        foreach($all_user as $user){
                            echo $user->id . "<br>";
                            echo $user->username . "<br>";

                        }


                    $the_user = User::find_single_user(5);

                    foreach($the_user as $single_user){
                        echo $single_user->first_name . "<br>";
                        echo $single_user->id . "<br>";
                        echo $single_user->last_name . "<br>";
                        echo $single_user->password . "<br>";
                    }

                    







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