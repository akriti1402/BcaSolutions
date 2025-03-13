<?php
include("header.php");
?>
<section class="page-content course-sec">
    <div class="container1" style="margin: 0 1rem;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="widget-set">
                        <div class="widget-setcount">
                            <ul id="progressbar">
                                <li class="progress-active">
                                    <p><span></span> Basic Information</p>
                                </li>
                            </ul>
                        </div>
                        <div class="widget-content multistep-form">
                            <fieldset id="first">
                                <div class="add-course-info">
                                    <div class="add-course-form">
                                        <form action="#">
                                            <div class="form-group">
                                                <label class="add-course-label">Course Title</label>
                                                <input type="text" class="form-control" placeholder="Course Title">
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Courses Category</label>
                                                <select class="form-control select">
                                                    <option>Category 01</option>
                                                    <option>Category 02</option>
                                                    <option>Category 03</option>
                                                    <option>Category 04</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="add-course-label">Courses Level</label>
                                                <select class="form-control select">
                                                    <option>Level 01</option>
                                                    <option>Level 02</option>
                                                    <option>Level 03</option>
                                                    <option>Level 04</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-0">
                                                <label class="add-course-label">Course Description</label>
                                                <div id="editor"></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="widget-btn">
                                        <a class="btn btn-black">Back</a>
                                        <a class="btn btn-info-light next_btn">Continue</a>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/plugins/select2/js/select2.min.js"></script>
<script src="assets/js/ckeditor.js"></script>
<script src="assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js"></script>
<script src="assets/js/script.js"></script>
</body>

</html>