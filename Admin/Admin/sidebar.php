<style>
    #myUL,
    ul {
        list-style-type: none;
    }

    .caret {
        cursor: pointer;
        user-select: none;
    }

    .nested {
        display: none;
    }

    .active {
        display: block;
    }
</style>
<div class="col-xl-3 col-lg-4 col-md-12 theiaStickySidebar">
    <div class="settings-widget dash-profile">
        <div class="settings-menu p-0">
            <div class="profile-bg">
                <h5>Beginner</h5>
                <img src="assets/img/instructor-profile-bg.jpg" alt="">
                <div class="profile-img">
                    <a href="#instructor-profile.php"><img src="ajax-files/image/<?php echo $img; ?>" alt=""></a>
                </div>
            </div>
            <div class="profile-group">
                <div class="profile-name text-center">
                    <h4><a href="#instructor-profile.php"><?php echo $fname; ?></a></h4>
                    <p>Instructor</p>
                </div>
                <!-- <div class="go-dashboard text-center">
                    <a href="add-course.php" class="btn btn-primary">Create New Course</a>
                </div> -->
            </div>
        </div>
    </div>
    <div class="settings-widget account-settings">
        <div class="settings-menu">

            <h3>DASHBOARD</h3>
            <!-- <ul id="myUL">
                <li><span class="caret has-submenu">Course</span>
                    <ul class="nested submenu">
                        <li class="nav-item">Add Course</li>
                        <li class="nav-item">Remove Course</li>
                    </ul>
                </li>
            </ul> -->
            <ul>
                <li class="nav-item active">
                    <a href="dashboard.php" class="nav-link">
                        <i class="feather-home"></i> My Dashboard
                    </a>
                </li>
                <!-- <li class="has-submenu">
                    <a href="instructor-list.html">Instructor</a>
                    <ul class="submenu">
                        <li><a href="instructor-list.html">List</a></li>
                        <li><a href="instructor-grid.html">Grid</a></li>
                    </ul>
                </li> -->
                <li class="nav-item">
                    <a href="courses.php" class="nav-link">
                        <i class="feather-book"></i> My Courses
                    </a>
                </li>
                <li class="nav-item">
                    <a href="students.php" class="nav-link">
                        <i class="feather-users"></i> Students
                    </a>
                </li>
            </ul>
            <div class="instructor-title">
                <h3>ACCOUNT SETTINGS</h3>
            </div>
            <ul>
                <li class="nav-item">
                    <a href="#instructor-edit-profile.php" class="nav-link ">
                        <i class="feather-settings"></i> Edit Profile
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a href="#instructor-security.php" class="nav-link">
                        <i class="feather-user"></i> Security
                    </a>
                </li> -->
                <li class="nav-item">
                    <a href="logout.php" class="nav-link">
                        <i class="feather-power"></i> Sign Out
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Script for Tree View -->
<script>
    var toggler = document.getElementsByClassName("caret");
    var i;

    for (i = 0; i < toggler.length; i++) {
        toggler[i].addEventListener("click", function() {
            this.parentElement.querySelector(".nested").classList.toggle("active");
            this.classList.toggle("caret-down");
        });
    }
</script>
<!-- Script for Tree View -->