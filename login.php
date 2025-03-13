<?php
include("Admin/Admin/connection.php");
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    // echo "or ";
    // echo  $passwordEnc = convert_uuencode($password);
    echo   $signin_sql = "SELECT * FROM `signup` WHERE `email` = '$email' AND `password`='$password' AND `user_type` = 'user'";
    $sigin_run = mysqli_query($conn, $signin_sql);
    if (mysqli_num_rows($sigin_run) > 0) {
        $signin_data = mysqli_fetch_assoc($sigin_run);
        if ($signin_data) {
            session_start();
            session_unset();
            $_SESSION['email'] = $signin_data['email'];
            $_SESSION['rankers_id'] = $signin_data['rankers_id'];
            if (!empty($_SESSION['email']) && !empty($_SESSION['rankers_id'])) {
                header("Location: index.php?login-success");
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
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Rankers 2 Next Step</title>
    <link rel="stylesheet" href="login.css">
</head>
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
            <div class="col-md-6 login-wrap-bg cont">
                <div class="login-wrapper">
                    <div class="loginbox">
                        <div class="w-100">
                            <div class="img-logo d-flex">
                                <!-- <img src="Images/newLogoScap.png" class="img-fluid" alt="Logo"> -->
                                <div class="back-home">
                                    <!-- <a href="index.php">Back to Home</a> -->
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
                                        <!-- <span class="feather-eye toggle-password"></span> -->
                                    </div>
                                </div>
                                <div class="forgot">
                                    <!-- <span><a class="forgot-link" href="Admin/Admin/forgot-password.php">Forgot Password
                                            ?</a></span> -->
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
                                <p class="mb-0">New User ? <a href="signup.php">Create an Account</a></p>
                            </div>
                            <div class="text-center">
                                <p><a href="forget-pass.php">Forget Password</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="login.js"></script>
</body>

</html>