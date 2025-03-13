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
                </div> <?php
                        $Ecourse = "";
                        $Esem = "";
                        $Ebanner = "";
                        $Eid = "";
                        if (isset($_GET['Eid'])) {
                            $Eid = $_GET['Eid'];
                            $Esql = "SELECT * FROM `semester` WHERE `id` = $Eid";
                            $Erun = mysqli_query($conn, $Esql);
                            $Edata = mysqli_fetch_assoc($Erun);
                            $Ecourse = $Edata['course'];
                            $Esem = $Edata['sem'];
                            $Ebanner = $Edata['banner'];
                        }
                        ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card instructor-card">
                            <form action="" id="form_data" method="POST">
                                <br>
                                <div class="sell-course-head comman-space">
                                    <h3>Enter Semester Details</h3>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Choose Course</label>
                                        <select name="cname" id="cname" class="form-control">
                                            <option value="">Select</option>
                                            <?php
                                            $CourseSql = "SELECT * FROM `course` ORDER BY `course` ASC";
                                            $CourseRun = mysqli_query($conn, $CourseSql);
                                            while ($CourseData = mysqli_fetch_assoc($CourseRun)) {
                                                if ($CourseData['course'] == $Ecourse) {
                                                    echo '<option  selected value="' . $CourseData['course'] . '">' . $CourseData['course'] . '</option>';
                                                }
                                                echo '<option value="' . $CourseData['course'] . '">' . $CourseData['course'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Semester Name</label>
                                        <input type="text" id="sname" name="sname" value="<?php echo $Esem; ?>" class="form-control" placeholder="Semester Name">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label">Semester Thumbnail</label>
                                        <input type="file" id="banner" name="banner" class="form-control" placeholder="Semester Thumbnail">
                                        <input type="text" hidden id="Ebanner" name="Ebanner" value="<?php echo $Ebanner; ?>">
                                    </div>
                                </div>
                                <div style="margin: 1rem;">
                                    <input type="text" value="<?php echo $Eid; ?>" name="Eid" id="Eid" hidden>
                                    <button type="submit" class="col-lg-12 btn  btn-action-dark" id="add" name="add">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card instructor-card">
                            <div class="settings-widget">
                                <div class="settings-inner-blk p-0">
                                    <div class="sell-course-head comman-space">
                                        <h3>Available Semester</h3>
                                    </div>
                                    <div class="comman-space pb-0">
                                        <div class="settings-tickets-blk course-instruct-blk table-responsive">
                                            <table class="table table-nowrap mb-0" id="SemData">

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
    // For Add semster
    $(document).ready(function() {
        $('form').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                url: "ajax-files/addSem.php",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(response) {
                    // alert(response);
                    $('form').trigger('reset');
                    $('#SemData').load('ajax-files/fetchSem.php');
                }
            })
        })
    })
    // For Display Semester Data
    $(document).ready(function() {
        $('#SemData').load('ajax-files/fetchSem.php');
        $.ajax({
            url: "ajax-files/fetchSem.php",
            type: "POST",
            success: function(response) {
                $('#SemData').html(response);
                // $('form').trigger('reset');
            }
        })
    })

    // For Delete Sem Data ..
</script>

</body>

</php>