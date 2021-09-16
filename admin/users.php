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

                        $all_user = User::find_all_user();

                        while($row = mysqli_fetch_assoc($all_user)) {
                            $user_id  = $row['id'];
                            $username = $row['username'];

                            echo "<a href='users.php?user_id={$user_id}'> {$username} </a> . <br>";
                        }


                        if(isset($_GET['user_id'])){
                            $user_id = $database->escape_string($_GET['user_id']);

                            $result = User::find_single_user($user_id);

                            while($row = mysqli_fetch_array($result)){
                                echo $row['id'] . "<br>";
                                echo $row['username'] . "<br>";
                                echo $row['password'] . "<br>";
                                echo $row['first_name'] . "<br>";
                                echo $row['last_name'] . "<br>";
                            }
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