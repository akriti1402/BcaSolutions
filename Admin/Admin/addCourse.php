<?php include("header.php"); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- Jquery CDN  -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

<!-- <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"> -->
<!-- <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script> -->
<!-- Jquery CDN  -->
<style>
    /* #cthumbnail_preview {
        display: none;
    } */
</style>
<div class="page-content instructor-page-content">
    <!-- sidebar -->
    <div class="container1" style="margin: 0 1rem;">
        <div class="row">
            <!-- SideBar -->
            <?php include("sidebar.php"); ?>
            <div class="col-xl-9 col-lg-8 col-md-12">
                <div class="row">
                    <div class="row">
                        <div class="col-md-3 d-flex">
                            <a href="addCourse.php">
                                <div class="mx-2 instructor-card w-100">
                                    <div class="#">
                                        <button type="button" id="AddCourse" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter">
                                            Add Course
                                        </button>
                                    </div>
                                </div>
                            </a>
                            <a href="addSem.php">
                                <div class="mx-2 instructor-card w-100">
                                    <div class="">
                                        <button type="button" id="AddCourse" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter">
                                            Add Sem
                                        </button>
                                    </div>
                                </div>
                            </a>
                            <a href="addSub.php">
                                <div class="mx-2 instructor-card w-100">
                                    <div class="">
                                        <button type="button" id="AddCourse" class="btn btn-warning" data-toggle="modal" data-target="#exampleModalCenter">
                                            Add Subject
                                        </button>
                                    </div>
                                </div>
                            </a>
                            <a href="addUnit.php">
                                <div class="mx-2 instructor-card w-100">
                                    <div class="">
                                        <button type="button" class="btn btn-warning">
                                            Add Unit
                                        </button>
                                    </div>
                                </div>
                            </a>
                            <a href="addUnitDetails.php">
                                <div class="mx-2 instructor-card w-100">
                                    <div class="">
                                        <button type="button" class="btn btn-warning">
                                            Add Unit Details
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <?php
                include("connection.php");
                $courseName =  "";
                $description =  "";
                $banner =   "";
                $Eid = "";
                if (isset($_GET['Eid'])) {
                    $Eid = $_GET['Eid'];
                    $Eqry = "SELECT * FROM `course` WHERE `course`.`id` = '$Eid'";
                    $Erun = mysqli_query($conn, $Eqry);
                    $Erow = mysqli_fetch_assoc($Erun);
                    $courseName =   $Erow['course'];
                    $description =   $Erow['description'];
                    $banner =   $Erow['banner'];
                }
                ?>
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
                                        <input type="text" id="cname" value="<?php echo $courseName; ?>" name="cname" class="form-control" placeholder="Course Name">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Course Description</label>
                                        <input type="text" id="cdesc" value="<?php echo $description; ?>" name="cdesc" class="form-control" placeholder="Course Description">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Course Thumbnail</label>
                                        <input type="file" id="cthumbnail" name="cthumbnail" class="form-control" placeholder="Course Thumbnail">
                                        <!-- <input type="text" hidden id="Ebanner" value="<?php echo $banner; ?>" name="Ebanner"> -->
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group" id="PreviewImage">
                                        <img src="" id="cthumbnail_preview" alt="" style="height:5rem;width:8rem;">
                                    </div>
                                </div>
                                <div style="margin: 1rem;">
                                    <input type="text" id="Eid" name="Eid" hidden value="<?php echo $Eid; ?>">
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
                                            <table class="table table-nowrap mb-0" id="CourseData" class="display" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Course</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody id="AvailableCourse" style="overflow: scroll;">
                                                    <!-- Data comes from fetchCourse.php inside ajax-files folder -->

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    <div class="col-md-12">
                        <div class="card instructor-card">
                            <div class="card-header">
                                <h4>Order</h4>
                            </div>
                            <div class="card-body">
                                <div id="order_chart"></div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<!-- Button trigger modal -->


<?php
include("footer.php");
?>

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
<!-- For Data Table -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script> -->
<script>
    $(document).ready(function() {
        // For Display Preview Photo 
        $('#cthumbnail').change(function() {
            imgURL(this);
        })

        function imgURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#cthumbnail_preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        // For Submit Data 
        $("form").on('submit', function(e) {
            // alert("OKOK");
            e.preventDefault();
            //  form_data = ;
            $.ajax({
                url: "ajax-files/addCourse_ajax.php",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {
                    // alert(response);
                    $("form").trigger("reset");
                    $("#CourseData").load("ajax-files/fetchCourse.php");
                    // $('#mycart').load('cart.php');
                }
            })
        })
    })
    // For Display Available Courses 
    $(document).ready(function() {
        getCourse();
    });

    function getCourse() {
        $.ajax({
            type: "POST",
            url: "ajax-files/fetchCourse.php",
            success: function(response) {
                // console.log("Hello");
                $("#AvailableCourse").html(response);
            }
        });
    }
</script>

<!-- For Data Table -->
<!-- <script>
    $(document).ready(function() {
        $('#CourseData').DataTable();
    });
</script> -->

</body>

</php>