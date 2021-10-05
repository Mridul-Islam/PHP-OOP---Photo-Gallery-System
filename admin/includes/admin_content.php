<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin
                            <small>Subheading</small>
                        </h1>

                        <?php



                        // $user = User::find_user_by_id(1);
                        // echo $user->id;
                        // echo $user->username;
                        // echo $user->first_name . "<br>";

                        echo $session->is_signed_in() . "<br>";

                        //$session->login($user);

                        //$session->logout();

                        // $create = new User();

                        // $create->username   = "Shamim Khan";
                        // $create->password   = "12345";
                        // $create->first_name = "Shamim";
                        // $create->last_name  = "Hossain";
                        //$create->create_user();

                        // $user = User::find_user_by_id(6);

                        // $user->last_name = "Khan";

                        // $user->update_user();

                        // $user = User::find_user_by_id(10);
                        // $user->delete_user();


                        // $user = new User();
                        // $user->username   = "Shawon";
                        // $user->password   = "12345";
                        // $user->first_name = "Shawon";
                        // $user->last_name  = "Kahn";
                        // $user->save();


                        // $user = User::find_user_by_id(20);
                        // $user->username = "Shihab";
                        // $user->save();


                        // $user = User::find_user_by_id(12);
                        // echo $user->username;
                        // echo $user->password;





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