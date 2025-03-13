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
                            <img src="../../Images/newLogoScap.png" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mentor-course text-center">
                            <h2>Welcome to <br>Rankers2 NextStep Courses.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                    <div class="welcome-login">
                        <div class="login-banner">
                            <img src="../../Images/newLogoScap.png" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mentor-course text-center">
                            <h2>Welcome to <br>Rankers2 NextStep Courses.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                    <div class="welcome-login">
                        <div class="login-banner">
                            <img src="../../Images/newLogoScap.png" class="img-fluid" alt="Logo">
                        </div>
                        <div class="mentor-course text-center">
                            <h2>Welcome to <br>Rankers2 NextStep Courses.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 login-wrap-bg cont">
                <div class="login-wrapper">
                    <div class="loginbox">
                        <div class="w-100">
                            <div class="img-logo d-flex">
                                <img src="../../Images/newLogoScap.png" class="img-fluid" alt="Logo">
                                <div class="back-home">
                                    <!-- <a href="index.php">Back to Home</a> -->
                                </div>
                            </div>
                            <h1>Create New Password</h1>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label class="form-control-label">Password</label>
                                    <input type="text" name="log_pass1" class="form-control" placeholder="New Password">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label">Password</label>
                                    <div class="pass-group">
                                        <input type="password" name="log_pass2" class="form-control pass-input" placeholder="Confirm Password">
                                    </div>
                                </div>

                                <div class="d-grid">
                                    <button class="btn btn-primary btn-start" type="submit" name="submit">Submit</button>
                                </div>
                            </form>
                            <?php
                            $get_email = $_GET['email'];
                            if (isset($_POST['submit'])) {

                                $log_pass1 = $_POST['log_pass1'];
                                $log_pass2 = $_POST['log_pass2'];

                                if ($log_pass1 == $log_pass2) {
                                    $update_pass = "UPDATE `signup` SET `password`='$log_pass1' WHERE `email` = '$get_email'";
                                    $update_pass_run = mysqli_query($conn, $update_pass);
                                } else {

                            ?>
                                    <script>
                                        alert("Password don't match");
                                    </script>
                                <?php
                                }

                                if ($update_pass_run) {

                                    $del_otp = mysqli_query($conn, "DELETE FROM `otp` WHERE `email` = '$get_email'");
                                ?>
                                    <script>
                                        window.open('login.php', '_self');
                                    </script>
                                <?php
                                } else {
                                ?>
                                    <script>
                                        alert('something went wrong');
                                    </script>
                            <?php
                                }
                            }

                            ?>

                            <br>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="login.js"></script>
</body>

</html>