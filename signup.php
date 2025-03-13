<?php
include("Admin/Admin/connection.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Rankers 2 Next Step</title>
    <link rel="stylesheet" href="login.css">
</head>
<script src="singin.js"></script>
<style>
    .cont {
        //width:100%;
        background-image: linear-gradient(rgba(209, 121, 2, 1),
                rgba(255, 255, 255, 1));
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>

<body>
    <div class="main-wrapper log-wrap">
        <div class="row">
            <div class="col-md-6 login-bg" style="background-color:#EEBF00;">
                <div class="owl-carousel login-slide owl-theme">
                    <div class="welcome-login">
                        <div class="login-banner">
                            <img src="Images/newLogoScap.png" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mentor-course text-center">
                            <h2>Welcome to <br>Rankers2 NextStep Courses.</h2>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p> -->
                        </div>
                    </div>
                    <div class="welcome-login">
                        <div class="login-banner">
                            <img src="Images/newLogoScap.png" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mentor-course text-center">
                            <h2>Welcome to <br>Rankers2 NextStep Courses.</h2>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p> -->
                        </div>
                    </div>
                    <div class="welcome-login">
                        <div class="login-banner">
                            <img src="Images/newLogoScap.png" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mentor-course text-center">
                            <h2>Welcome to <br>Rankers2 NextStep Courses.</h2>
                            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 login-wrap-bg">
                <div class="login-wrapper">
                    <div class="loginbox">
                        <div class="img-logo">
                            <!-- <img src="Images/newLogoScap.png" class="img-fluid" alt="Logo"> -->
                            <div class="back-home">
                                <!-- <a href="index.php">Back to Home</a> -->
                            </div>
                        </div>
                        <h1 id="response">Sign up</h1>
                        <form action="login.php">
                            <div class="form-group">
                                <label class="form-control-label">Full Name</label>
                                <input type="text" class="form-control" id="fname" placeholder="Enter your Full Name">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email address">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Password</label>
                                <div class="pass-group" id="passwordInput">
                                    <input type="password" class="form-control pass-input" id="password" placeholder="Enter your password">
                                </div>
                            </div>
                            <!-- <div class="form-check remember-me">
                            <label class="form-check-label mb-0">
                                <input class="form-check-input" type="checkbox" name="remember"> I agree to the <a href="#term-condition.php">Terms of Service</a> and <a href="#privacy-policy.php">Privacy Policy.</a>
                            </label>
                        </div> -->
                            <div class="d-grid">
                                <button class="btn btn-primary btn-start" type="" id="signin">Create Account</button>
                            </div>
                        </form>
                        <br>
                        <div class="text-center">
                            <span><a href="#">Or </a></span>
                            <p class="mb-0">Already have an account? <a href="login.php">Sign in</a></p>
                        </div>
                    </div>
                    <div class="google-bg text-center">
                        <!-- <span><a href="#">Or sign in with</a></span> -->
                        <!-- <div class="sign-google">
                        <ul>
                            <li><a href="#"><img src="assets/img/net-icon-01.png" class="img-fluid" alt="Logo"> Sign In using Google</a></li>
                            <li><a href="#"><img src="assets/img/net-icon-02.png" class="img-fluid" alt="Logo">Sign In using Facebook</a></li>
                        </ul>
                    </div> -->
                        <!-- <p class="mb-0">Already have an account? <a href="login.php">Sign in</a></p> -->
                    </div>
                </div>
            </div>
        </div>
        <script>
            $('#signin').on('click', function() {
                var data = {
                    fname: $('#fname').val(),
                    email: $('#email').val(),
                    password: $('#password').val(),
                };
                $.ajax({
                    url: 'Admin/Admin/ajax-files/signup.php',
                    type: 'post',
                    data: data,
                    success: function(response) {
                        alert(response);
                        $('#response').html(response);

                        // alert("Congrats!! You signed up......");
                    }
                })
            })
        </script>
        <!-- For Form data  -->

    </div>
    <script src="login.js"></script>
</body>

</html>