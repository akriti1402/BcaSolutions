<?php
include("header.php");
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- Jquery CDN  -->
<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<!-- Jquery CDN  -->
<section class="page-content course-sec">
    <div class="container1" style="margin: 0 1rem;">
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
            <div class="col-md-8">
                <div class="card">
                    <div class="widget-set">
                        <!-- <div class="widget-setcount">
                            <ul id="progressbar">
                                <li class="progress-active">
                                    <p><span></span> Basic Information</p>
                                </li>
                            </ul>
                        </div> -->
                        <div class="add-course-inner-header"> <br>
                            <center>
                                <h4>Upload Unit Details</h4>
                            </center>
                        </div>
                        <div class="widget-content multistep-form">
                            <fieldset id="first">
                                <div class="add-course-info">
                                    <div class="add-course-form">
                                        <form action="#" method="POST" enctype="multipart/form-data">
                                            <div class="col-md-12 row">
                                                <div class="form-group col-md-6">
                                                    <label class="add-course-label">Course</label>
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
                                                <div class="form-group col-md-6">
                                                    <label class="add-course-label">Semester</label>
                                                    <select name="SemList" id="SemList" class="form-control">

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12 row">
                                                <div class="form-group col-md-6">
                                                    <label class="add-course-label">Subject</label>
                                                    <select name="SubList" id="SubList" class="form-control">

                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label class="add-course-label">Unit</label>
                                                    <select name="UnitList" id="UnitList" class="form-control">

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label class="form-control-label">Upload PDF</label>
                                                <input type="file" id="pthumbnail" name="pthumbnail" class="form-control" placeholder="Semester Thumbnail">
                                                <!-- <div id="editor"></div> -->
                                            </div>
                                            <div class="form-group col-md-12">
                                                <center>
                                                    <button class="btn btn-lg btn-success" type="submit" name="submit" id="submit">Add</button>
                                                </center>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 card">
                <fieldset class="field-card">
                    <div class="add-course-info"><br>
                        <!-- <div class="add-course-inner-header">
                            <h4>Uploaded Units</h4>
                        </div> -->
                        <div class="widget-setcount">
                            <ul id="progressbar">
                                <li class="progress-active">
                                    <p><span></span> Added Units</p>
                                </li>
                            </ul>
                        </div>
                        <div class="add-course-form" id="UnitDetails">

                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</section>
<?php
include("footer.php");
?>

<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="assets/js/ckeditor.js"></script>
<script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>
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
    // Get Subject Name
    $(document).ready(function() {
        $('#course').on('change', function() {
            var course = $(this).val();
            $('#SemList').on('change', function() {
                var sem = $(this).val();
                $.ajax({
                    url: "ajax-files/fetchSubListForUnit.php",
                    method: "POST",
                    data: {
                        sem: sem,
                        course: course
                    },
                    cache: false,
                    success: function(response) {
                        $('#SubList').html(response);
                    }
                })
            })
        })
    })
    // Get Unit Name
    $(document).ready(function() {
        $('#course').on('change', function() {
            var course = $(this).val();
            $('#SemList').on('change', function() {
                var sem = $(this).val();
                $('#SubList').on('change', function() {
                    var sub = $(this).val();
                    $.ajax({
                        url: "ajax-files/fetchUnitListForUDetails.php",
                        method: "POST",
                        data: {
                            sem: sem,
                            course: course,
                            sub: sub
                        },
                        cache: false,
                        success: function(response) {
                            // alert(response);
                            $('#UnitList').html(response);
                        }
                    })
                })
            })
        })
    })
    // Add Unit Details
    $(document).ready(function() {
        $('form').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: "ajax-files/addUnitDetails.php",
                method: "POST",
                data: new FormData(this),
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    alert(response);
                    $('form').trigger('reset');
                    $('#UnitDetails').load('ajax-files/fetchUnitDetails.php');
                }

            })
        })
    })
    // Fetch Unit Details
    $(document).ready(function() {
        $('#course').on('change', function() {
            var course = $(this).val();
            $('#SemList').on('change', function() {
                var sem = $(this).val();
                $('#SubList').on('change', function() {
                    var sub = $(this).val();
                    $.ajax({
                        url: "ajax-files/fetchUnitDetails.php",
                        method: "POST",
                        data: {
                            sem: sem,
                            course: course,
                            sub: sub
                        },
                        cache: false,
                        success: function(response) {
                            // alert(response);
                            $('#UnitDetails').html(response);
                        }
                    })
                })
            })
        })
    })
</script>
</body>

</html>