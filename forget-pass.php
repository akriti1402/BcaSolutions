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
        /* width: 100%; */
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
                            <center>
                                <h1>Forget Password</h1>
                            </center>
                            <?php
                            $otp = rand(100000, 999999);

                            ?>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label class="form-control-label">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter your Email">
                                </div>

                                <div class="d-grid">
                                    <button class="btn btn-primary btn-start" type="submit" name="sendotp">Send OTP</button>
                                </div>
                            </form>
                            <?php
                            if (isset($_POST['sendotp'])) {

                                $user_email = $_POST['email'];

                                $ins_otp = "INSERT INTO `otp`(`email`, `otp`) VALUES ('$user_email','$otp')";
                                $ins_otp_run = mysqli_query($conn, $ins_otp);


                                // the message
                                $msg = "The OTP for your email verification is " . $otp;

                                // use wordwrap() if lines are longer than 70 characters
                                $msg = wordwrap($msg, 70);

                                // send email
                                mail($user_email, "OTP Verification", $msg);
                            }
                            if ($ins_otp_run) {
                            ?>
                                <script>
                                    alert('OTP Sent successfully to your Email');
                                    window.open('enter_otp.php?email=<?php echo $user_email;  ?>', '_self');
                                </script>
                            <?php

                            }
                            ?>
                            <br>

                            <div class="text-center">
                                <!-- <p><a href="forget-pass.php">Forget Password</a> </p> -->
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