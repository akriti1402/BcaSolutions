<?php
include("connection.php");
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordEnc = convert_uuencode($password);

    $signin_sql = "SELECT * FROM `signup` WHERE `email` = '$email' && `password`='$passwordEnc'";
    $sigin_run = mysqli_query($conn, $signin_sql);
    if (mysqli_num_rows($sigin_run) > 0) {
        $signin_data = mysqli_fetch_assoc($sigin_run);
        if ($signin_data) {
            session_start();
            session_unset();
            $_SESSION['email'] = $signin_data['email'];
            $_SESSION['rankers_id'] = $signin_data['rankers_id'];
            if (!empty($_SESSION['email']) && !empty($_SESSION['rankers_id'])) {
                header("Location: dashboard.php?login-success");
            } else {
                echo '<script>alert("Session Not Set")</script>';
            }
        } else {
            header("Location: login.php?login-failed");
        }
    } else {
        echo '<script>alert("Please Enter the valid Email / Password")</script>';
    }
}

//include("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Rankers 2 NextStep</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.svg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/feather.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="main-wrapper log-wrap">
        <div class="row">
            <div class="col-md-6 login-bg">
                <div class="owl-carousel login-slide owl-theme">
                    <div class="welcome-login">
                        <div class="login-banner">
                            <img src="assets/img/login-img.png" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mentor-course text-center">
                            <h2>Welcome to <br>Rankers 2 nextStep Courses.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                    <div class="welcome-login">
                        <div class="login-banner">
                            <img src="assets/img/login-img.png" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mentor-course text-center">
                            <h2>Welcome to <br>Rankers 2 nextStep Courses.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                    <div class="welcome-login">
                        <div class="login-banner">
                            <img src="assets/img/login-img.png" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mentor-course text-center">
                            <h2>Welcome to <br>Rankers 2 nextStep Courses.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 login-wrap-bg">
                <div class="login-wrapper">
                    <div class="loginbox">
                        <div class="w-100">
                            <div class="img-logo">
                                <img src="assets/img/logo.svg" class="img-fluid" alt="Logo">
                                <div class="back-home">
                                    <a href="index.php">Back to Home</a>
                                </div>
                            </div>
                            <h1>Sign into Your Account</h1>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label class="form-control-label">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter your email address">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Password</label>
                                    <div class="pass-group">
                                        <input type="password" name="password" class="form-control pass-input" placeholder="Enter your password">
                                        <span class="feather-eye toggle-password"></span>
                                    </div>
                                </div>
                                <div class="forgot">
                                    <span><a class="forgot-link" href="forgot-password.php">Forgot Password
                                            ?</a></span>
                                </div>
                                <!-- <div class="remember-me">
                                <label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me
                                    <input type="checkbox" name="radio">
                                    <span class="checkmark"></span>
                                </label>
                            </div> -->
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-start" type="submit" name="submit">Sign In</button>
                                </div>
                            </form>
                            <br>
                            <div class="text-center">
                                <span><a href="#">Or </a></span>
                                <p class="mb-0">New User ? <a href="register.php">Create an Account</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="google-bg text-center">
                    <span><a href="#">Or sign in with</a></span>
                    <div class="sign-google">
                        <ul>
                            <li><a href="#"><img src="assets/img/net-icon-01.png" class="img-fluid" alt="Logo"> Sign
                                    In using Google</a></li>
                            <li><a href="#"><img src="assets/img/net-icon-02.png" class="img-fluid" alt="Logo">Sign
                                    In using Facebook</a></li>
                        </ul>
                    </div>
                    <p class="mb-0">New User ? <a href="register.php">Create an Account</a></p>
                </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Start For Login -->


    <!-- End For Login -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>
    <?php include("footer.php"); ?>