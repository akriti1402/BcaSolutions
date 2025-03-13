<?php include("header.php"); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- Jquery CDN  -->
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<!-- Jquery CDN  -->
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


                <div class="row">
                    <div class="col-md-6">
                        <div class="card instructor-card">
                            <br>
                            <form action="" method="POST">
                                <div class="sell-course-head comman-space">
                                    <h3>Enter Subject Details</h3>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Choose Course</label>
                                        <select name="course" id="course" class="form-control">
                                            <option value="">Select</option>
                                            <?php $Csql = "SELECT * FROM `course`  ORDER BY `course` ASC";
                                            $Crun = mysqli_query($conn, $Csql);
                                            while ($Crow = mysqli_fetch_array($Crun)) {
                                                echo '<option value="' . $Crow['course'] . '">' . $Crow['course'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Choose SEM</label>
                                        <select name="SemList" id="SemList" class="form-control">

                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Subject Name</label>
                                        <input type="text" name="sname" id="sname" class="form-control" placeholder="Semester Name">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Suject Thumbnail</label>
                                        <input type="file" id="sthumbnail" name="sthumbnail" class="form-control" placeholder="Semester Thumbnail">
                                    </div>
                                </div>
                                <div style="margin: 1rem;">
                                    <button type="submit" id="submit" name="submit" class="col-lg-12 btn  btn-action-dark">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card instructor-card">
                            <div class="settings-widget">
                                <div class="settings-inner-blk p-0">
                                    <div class="sell-course-head comman-space">
                                        <h3>Available Subject</h3>
                                    </div>
                                    <div class="comman-space pb-0">
                                        <div class="settings-tickets-blk course-instruct-blk table-responsive">
                                            <table class="table table-nowrap mb-0" id="subList">

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
<script>
    // Get Semester List
    $(document).ready(function() {
        $('#course').on('change', function() {
            var course = $(this).val();
            // alert(course);
            $.ajax({
                url: "ajax-files/fetchSemList.php",
                method: "POST",
                data: {
                    course: course
                },
                cache: false,
                success: function(response) {
                    // alert(response);
                    $('#SemList').html(response);

                }
            })
        })
    })
    // Add Subject
    $(document).ready(function() {
        $('form').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: "ajax-files/addSub.php",
                method: "POST",
                data: new FormData(this),
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    // alert(response);
                    $('form').trigger('reset');
                    $('#SubList').load('ajax-files/fetchSubList.php');

                }
            })

        })
    })
    // Fetch Subject List
    $(document).ready(function() {
        $.ajax({
            url: "ajax-files/fetchSubList.php",
            method: "POST",
            success: function(response) {
                // alert(response);
                $('#subList').html(response);
            }
        })
    })
</script>
</body>

</php>