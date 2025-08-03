<?php include("header.php"); ?>
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<!-- Jquery CDN  -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<!-- Jquery CDN  -->
<div class="page-content instructor-page-content">
    <!-- sidebar -->
    <div class="container1" style="margin: 0 1rem;">
        <div class="row">
            <!-- SideBar -->
            <?php include("sidebar.php");
            ?>
            <div class="col-xl-9 col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-3 d-flex">
                        <a href="addCourse.php">
                            <div class="mx-2 instructor-card w-100">
                                <div class="">
                                    <button type="button" id="AddCourse" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                        Add Course
                                    </button>
                                </div>
                            </div>
                        </a>
                        <a href="addSem.php">
                            <div class="mx-2 instructor-card w-100">
                                <div class="">
                                    <button type="button" id="AddCourse" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                        Add Sem
                                    </button>
                                </div>
                            </div>
                        </a>
                        <a href="addSub.php">
                            <div class="mx-2 instructor-card w-100">
                                <div class="">
                                    <button type="button" id="AddCourse" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                        Add Subject
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card instructor-card">
                            <br>
                            <form action="" id="myform" method="POST">
                                <div class="sell-course-head comman-space">
                                    <h3>Enter Course Details</h3>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Course Name</label>
                                        <input type="text" id="cname" name="cname" class="form-control" placeholder="Course Name">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Course Description</label>
                                        <input type="text" id="cdesc" name="cdesc" class="form-control" placeholder="Course Description">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Course Thumbnail</label>
                                        <input type="file" id="cthumbnail" name="cthumbnail" class="form-control" placeholder="Course Thumbnail">
                                    </div>
                                </div>
                                <div style="margin: 1rem;">
                                    <button type="submit" class="col-lg-12 btn  btn-action-dark" id="add">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card instructor-card">
                            <div class="settings-widget">
                                <div class="settings-inner-blk p-0">
                                    <div class="sell-course-head comman-space">
                                        <h3>Available Courses</h3>
                                    </div>
                                    <div class="comman-space pb-0">
                                        <div class="settings-tickets-blk course-instruct-blk table-responsive">
                                            <table class="table table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Course</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="sell-table-group d-flex align-items-center">
                                                                <div class="sell-group-img">
                                                                    <a href="course-details.html">
                                                                        <img src="assets/img/course/course-10.jpg" class="img-fluid " alt="">
                                                                    </a>
                                                                </div>
                                                                <div class="sell-tabel-info">
                                                                    </p>
                                                                    <p><a href="course-details.html">Information
                                                                            About UI/UX Design Degree</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <center>
                                                                <a href="#Edit"><i class="feather-settings"></i>&nbsp;</a>
                                                                <a href="#Del"> <i class="feather-trash-2"></i></a>
                                                            </center>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<!-- Button trigger modal -->

<!-- 
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
</footer> -->

</div>

<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/feather/feather.min.js"></script>
<script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
<script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="assets/plugins/apexchart/chart-data.js"></script>
<script src="assets/js/script.js"></script>

<!-- <script type="text/javascript">
    $(document).ready(function($) {
        // on submit...
        $('form').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: "ajax-files/testajax.php",
                data: formData, // get all form field value in serialize form
                contentType: false,
                processData: false,
                success: function(data) {
                    alert(data);
                }
            });
            //name required
            // var cate_name = $("select#cate_name").val();
            // if (v == "") {
            //     $("#error").fadeIn().text("Select Category.");
            //     $("input#cate_name").focus();
            //     return false;
            // }
            // // email required
            // var course = $("input#course").val();
            // if (course == "") {
            //     $("#error").fadeIn().text("Course required");
            //     $("input#course").focus();
            //     return false;
            // }
            // // mobile number required
            // var image = $("input#image").val();
            // if (image == "") {
            //     $("#error").fadeIn().text("Image required");
            //     $("input#image").focus();
            //     return false;
            // }
        });
        return false;
    });
</script> -->

<script>
    $(document).ready(function() {
        $("form").on('submit', function(e) {
            e.preventDefault();
            //  form_data = ;
            $.ajax({
                url: "ajax-files/testajax.php",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {
                    alert(response);
                }
            })
        })
    })
</script>

</body>

</php>