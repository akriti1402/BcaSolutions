<?php include("header.php"); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="page-content instructor-page-content">
    <!-- sidebar -->
    <div class="container1" style="margin: 0 1rem;">
        <div class="row">
            <!-- SideBar -->
            <?php include("sidebar.php");

            $sql = "SELECT * FROM `signup`  WHERE `rankers_id` = '$rankers_id'";
            $run = mysqli_query($conn, $sql);
            $data = mysqli_fetch_assoc($run);

            ?>
            <div class="col-xl-9 col-md-8">
                <div class="settings-widget profile-details">
                    <div class="settings-menu p-0">
                        <div class="profile-heading">
                            <h3>Profile Details</h3>
                            <p>You can manage your own account setting.</p>
                        </div>
                        <div class="checkout-form personal-address add-course-info">
                            <form action="#" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Rankers ID</label>
                                            <input type="text" name="rankers_id" value="<?php echo $rankers_id; ?>" class="form-control" placeholder="R2NS010623001" readonly="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Email</label>
                                            <input type="text" name="email" value="<?php echo $data['email']; ?>" class="form-control" placeholder="rankers@nextstep.com" readonly="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">First Name</label>
                                            <input type="text" name="fname" value="<?php echo $data['fname']; ?>" class="form-control" placeholder="Enter your first Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Last Name</label>
                                            <input type="text" name="lname" value="<?php echo $data['lname']; ?>" class="form-control" placeholder="Enter your last Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Phone</label>
                                            <input type="text" name="phone" value="<?php echo $data['phone']; ?>" class="form-control" placeholder="Enter your Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Birthday</label>
                                            <input type="date" name="dob" value="<?php echo $data['dob']; ?>" class="form-control" placeholder="Birth of Date">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Address</label>
                                            <textarea name="address" class="form-control" id="" rows="2"><?php echo $data['address']; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Profile Image</label>
                                            <input type="file" name="image" value="<?php echo $data['image']; ?>" class="form-control" placeholder="Birth of Date">
                                        </div>
                                    </div>
                                    <div class="update-profile">
                                        <center>
                                            <button type="submit" name="submit" class="btn btn-primary">Update Profile</button>
                                        </center>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget footer-about">
                        <div class="footer-logo">
                            <img src="assets/img/logo.svg" alt="logo">
                            RankersLogo
                        </div>
                        <div class="footer-about-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat mauris Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut consequat mauris</p>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-2 col-md-6">
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">For Instructor</h2>
                        <ul>
                            <li><a href="#instructor-profile.php">Profile</a></li>
                            <li><a href="#login.php">Login</a></li>
                            <li><a href="#register.php">Register</a></li>
                            <li><a href="#instructor-list.php">Instructor</a></li>
                            <li><a href="#deposit-instructor-dashboard.php"> Dashboard</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">For Student</h2>
                        <ul>
                            <li><a href="#student-profile.php">Profile</a></li>
                            <li><a href="#login.php">Login</a></li>
                            <li><a href="#register.php">Register</a></li>
                            <li><a href="#students-list.php">Student</a></li>
                            <li><a href="#deposit-student-dashboard.php"> Dashboard</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget footer-contact">
                        <h2 class="footer-title">News letter</h2>
                        <div class="news-letter">
                            <form>
                                <input type="text" class="form-control" placeholder="Enter your email address" name="email">
                            </form>
                        </div>
                        <div class="footer-contact-info">
                            <div class="footer-address">
                                <img src="assets/img/icon/icon-20.svg" alt="" class="img-fluid">
                                <p> 3556 Beech Street, San Francisco,<br> California, CA 94108 </p>
                            </div>
                            <p>
                                <img src="assets/img/icon/icon-19.svg" alt="" class="img-fluid">
                                <a href="#https://dreamslms.dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2e4a5c4b4f435d42435d6e4b564f435e424b004d4143">[email&#160;protected]</a>
                            </p>
                            <p class="mb-0">
                                <img src="assets/img/icon/icon-21.svg" alt="" class="img-fluid">
                                +19 123-456-7890
                            </p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6">
                        <div class="privacy-policy">
                            <ul>
                                <li><a href="#term-condition.php">Terms</a></li>
                                <li><a href="#privacy-policy.php">Privacy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="copyright-text">
                            <p class="mb-0">&copy; 2023 DreamsLMS. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<?php
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];

    // For Image
    $img = $_FILES['image']['name'];
    $imgName = rand(101, 1000) . "_" . $img;
    $imgtmp = $_FILES['image']['tmp_name'];
    $folder = "ajax-files/image/" . $imgName;
    move_uploaded_file($imgtmp, $folder);
    if ($img == "") {
        $imgName = $data['image'];
    }
    $updateQry = "UPDATE `signup` SET `fname`='$fname',`lname`='$lname',`phone`='$phone',`dob`='$dob',`address`='$address',`image`='$imgName'
                    WHERE `signup`.`rankers_id` = '$rankers_id'
                    ";
    $updateRun = mysqli_query($conn, $updateQry);
    if ($updateRun) {
        echo '<script>alert("Profile updated Successfully!!");
                window.open("dashboard.php");
        </script>';
        // header("Location: dashboard.php");
    }
}
?>

<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/feather/feather.min.js"></script>
<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="assets/plugins/apexchart/chart-data.js"></script>
<script src="assets/js/script.js"></script>

</body>

</php>