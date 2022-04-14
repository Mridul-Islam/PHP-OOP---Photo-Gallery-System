<?php include("includes/header.php"); ?>
<?php
$session = new Session();

if($session->is_signed_in()){
    redirect("index.php");
}

if(isset($_POST['login'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);


    // method to check database for this user
    $user_found = User::verify_user($username, $password);

    if($user_found){
        $session->login($user_found);
        redirect("./admin");
    }
    else{
        $the_message = "Your username and password didn't match";
    }
}
else{
    $username    = "";
    $password    = "";
    $the_message = "";
}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/login.css">

</head>
<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap p-0">
                    <h4 class="bg-danger text-center"><?php echo $the_message; ?></h4>
                    <h3 class="mb-4 text-center">Have an account?</h3>
                    <form action="#" class="signin-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" required name="username" value="<?php echo htmlentities($username); ?>">
                        </div>
                        <div class="form-group">
                            <input name="password" id="password-field" type="password" class="form-control" placeholder="Password" required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="login" class="form-control btn btn-primary submit px-3">Sign In</button>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-50">
                                <label class="checkbox-wrap checkbox-primary">Remember Me
                                    <input type="checkbox" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="w-50 text-md-right">
                                <a href="#" style="color: #fff">Forgot Password</a>
                            </div>
                        </div>
                    </form>
                    <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
                    <div class="social d-flex text-center">
                        <a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
                        <a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="js/login/jquery.min.js"></script>
<script src="js/login/popper.js"></script>
<script src="js/login/bootstrap.min.js"></script>
<script src="js/login/main.js"></script>

</body>
</html>

