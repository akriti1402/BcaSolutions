<?php
include("Admin/Admin/connection.php");
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    // echo "or ";
    // echo  $passwordEnc = convert_uuencode($password);
    $signin_sql = "SELECT * FROM `signup` WHERE `email` = '$email' AND `password`='$password' AND `user_type` = 'user'";
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
                                <h1>Enter OTP</h1>
                            </center>
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label class="form-control-label">OTP</label>
                                    <input type="number" name="otp" class="form-control" placeholder="Enter OTP">
                                </div>

                                <div class="d-grid">
                                    <button class="btn btn-primary btn-start" type="submit" name="verify">Verify</button>
                                </div>
                            </form>
                            <?php
                            $get_email = $_GET['email'];

                            if (isset($_POST['verify'])) {

                                $user_otp = $_POST['otp'];

                                $sel_otp = "SELECT * FROM `otp` WHERE `email` = '$get_email' AND `otp` = '$user_otp'";
                                $sel_otp_run = mysqli_query($conn, $sel_otp);
                                $otp_data = mysqli_fetch_assoc($sel_otp_run);

                                $db_otp = $otp_data['otp'];

                                if ($user_otp == $db_otp) {
                            ?>
                                    <script>
                                        window.open('create-pass.php?email=<?php echo $get_email; ?> ', '_self');
                                    </script>
                                <?php
                                } else {
                                ?>
                                    <script>
                                        alert('You have entered wrong OTP !!');
                                    </script>
                            <?php
                                }
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