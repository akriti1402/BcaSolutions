<?php
session_start();
if (!(isset($_SESSION['email']) && isset($_SESSION['rankers_id']))) {
    header('location: login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Rankers 2 NextStep</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.svg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/feather.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css">
</head>
<style>

</style>

<body>
    <?php include("connection.php");
    $email = $_SESSION['email'];
    $rankers_id = $_SESSION['rankers_id'];
    $query = "SELECT * FROM `signup` WHERE `email` = '$email' AND `rankers_id` = '$rankers_id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $fname = $row['fname'];
    $img = $row['image'];
    ?>

    <div class="main-wrapper">
        <header class="header header-page">
            <div class="header-fixed">
                <nav class="navbar navbar-expand-lg header-nav scroll-sticky">
                    <div class="container ">
                        <div class="navbar-header">
                            <a id="mobile_btn" href="javascript:void(0);">
                                <span class="bar-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </a>
                            <a href="#dashboard.php" class="navbar-brand logo">
                                <img src="../../Images/newLogoScap.png" class="img-fluid" alt="Logo">
                            </a>
                        </div>
                        <div class="main-menu-wrapper">
                            <div class="menu-header">
                                <a href="#dashboard.php" class="menu-logo">
                                    <img src="../../Images/newLogoScap.png" class="img-fluid" alt="Logo">
                                </a>
                                <a id="menu_close" class="menu-close" href="javascript:void(0);">
                                    <i class="fas fa-times"></i>
                                </a>
                            </div>
                            <ul class="main-nav">
                                <li class="has-submenu">
                                    <a href="dashboard.php">Home</a>
                                    <!-- <ul class="submenu">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="index-two.html">Home Two</a></li>
                                        <li><a href="index-three.html">Home Three</a></li>
                                        <li><a href="index-four.html">Home Four</a></li>
                                    </ul> -->
                                </li>
                                <li class="has-submenu ">
                                    <a href="#"> Course <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu">
                                        <!-- <li class="has-submenu">
                                            <a href="instructor-list.html">Instructor</a>
                                            <ul class="submenu">
                                                <li><a href="instructor-list.html">List</a></li>
                                                <li><a href="instructor-grid.html">Grid</a></li>
                                            </ul>
                                        </li> -->
                                        <li><a href="addCourse.php">Add Course</a></li>
                                        <li><a href="addSem.php">Add Semester</a></li>
                                        <li><a href="addSub.php">Add Subject</a></li>
                                        <li><a href="addUnit.php">Add Unit</a></li>
                                        <li><a href="addUnitDetails.php">Unit Details</a></li>
                                        <li><a href="addPaper.php">Paper Details</a></li>
                                        <!-- <li><a href="instructor-edit-profile.html">Instructor Profile</a></li>
                                        <li><a href="instructor-security.html">Security</a></li>
                                        <li><a href="instructor-social-profiles.html">Social Profiles</a></li>
                                        <li><a href="instructor-notification.html">Notifications</a></li>
                                        <li><a href="instructor-profile-privacy.html">Profile Privacy</a></li>
                                        <li><a href="instructor-delete-profile.html">Delete Profile</a></li>
                                        <li><a href="instructor-linked-account.html">Linked Accounts</a></li> -->
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="login.php">Login / Signup</a>
                                </li>

                                <!-- <ul class="main-nav">
                                <li class="has-submenu">
                                    <a href="#">Home <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="index-two.html">Home Two</a></li>
                                        <li><a href="index-three.html">Home Three</a></li>
                                        <li><a href="index-four.html">Home Four</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu active">
                                    <a href="#">Instructor <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu">
                                        <li class="active"><a href="instructor-dashboard.html">Dashboard</a></li>
                                        <li class="has-submenu">
                                            <a href="instructor-list.html">Instructor</a>
                                            <ul class="submenu">
                                                <li><a href="instructor-list.html">List</a></li>
                                                <li><a href="instructor-grid.html">Grid</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="instructor-course.html">My Course</a></li>
                                        <li><a href="instructor-reviews.html">Reviews</a></li>
                                        <li><a href="instructor-earnings.html">Earnings</a></li>
                                        <li><a href="instructor-orders.html">Orders</a></li>
                                        <li><a href="instructor-payouts.html">Payouts</a></li>
                                        <li><a href="instructor-tickets.html">Support Ticket</a></li>
                                        <li><a href="instructor-edit-profile.html">Instructor Profile</a></li>
                                        <li><a href="instructor-security.html">Security</a></li>
                                        <li><a href="instructor-social-profiles.html">Social Profiles</a></li>
                                        <li><a href="instructor-notification.html">Notifications</a></li>
                                        <li><a href="instructor-profile-privacy.html">Profile Privacy</a></li>
                                        <li><a href="instructor-delete-profile.html">Delete Profile</a></li>
                                        <li><a href="instructor-linked-account.html">Linked Accounts</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Student <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu first-submenu">
                                        <li class="has-submenu ">
                                            <a href="students-list.html">Student</a>
                                            <ul class="submenu">
                                                <li><a href="students-list.html">List</a></li>
                                                <li><a href="students-grid.html">Grid</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="setting-edit-profile.html">Student Profile</a></li>
                                        <li><a href="setting-student-security.html">Security</a></li>
                                        <li><a href="setting-student-social-profile.html">Social profile</a></li>
                                        <li><a href="setting-student-notification.html">Notification</a></li>
                                        <li><a href="setting-student-privacy.html">Profile Privacy</a></li>
                                        <li><a href="setting-student-accounts.html">Link Accounts</a></li>
                                        <li><a href="setting-student-referral.html">Referal</a></li>
                                        <li><a href="setting-student-subscription.html">Subscribtion</a></li>
                                        <li><a href="setting-student-billing.html">Billing</a></li>
                                        <li><a href="setting-student-payment.html">Payment</a></li>
                                        <li><a href="setting-student-invoice.html">Invoice</a></li>
                                        <li><a href="setting-support-tickets.html">Support Tickets</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Pages <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="notifications.html">Notification</a></li>
                                        <li><a href="pricing-plan.html">Pricing Plan</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li class="has-submenu">
                                            <a href="course-list.html">Course</a>
                                            <ul class="submenu">
                                                <li><a href="add-course.html">Add Course</a></li>
                                                <li><a href="course-list.html">Course List</a></li>
                                                <li><a href="course-grid.html">Course Grid</a></li>
                                                <li><a href="course-details.html">Course Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-submenu">
                                            <a href="come-soon.html">Error</a>
                                            <ul class="submenu">
                                                <li><a href="come-soon.html">Comeing soon</a></li>
                                                <li><a href="error-404.html">404</a></li>
                                                <li><a href="error-500.html">500</a></li>
                                                <li><a href="under-construction.html">Under Construction</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="support.html">Support</a></li>
                                        <li><a href="job-category.html">Category</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="forgot-password.html">Forgot Password</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="#">Blog <i class="fas fa-chevron-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="blog-list.html">Blog List</a></li>
                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                        <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                        <li><a href="blog-modern.html">Blog Modern</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="login-link">
                                    <a href="login.html">Login / Signup</a>
                                </li>
                            </ul> -->
                        </div>
                        <ul class="nav header-navbar-rht">
                            <!-- <li class="nav-item">
                                <a href="instructor-chat.html"><img src="assets/img/icon/messages.svg" alt="img"></a>
                            </li> 
                           <li class="nav-item cart-nav">
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                    <img src="assets/img/icon/cart.svg" alt="img">
                                </a>
                                <div class="wishes-list dropdown-menu dropdown-menu-right">
                                    <div class="wish-header">
                                        <a href="#">View Cart</a>
                                        <a href="javascript:void(0)" class="float-end">Checkout</a>
                                    </div>
                                    <div class="wish-content">
                                        <ul>
                                            <li>
                                                <div class="media">
                                                    <div class="d-flex media-wide">
                                                        <div class="avatar">
                                                            <a href="course-details.html">
                                                                <img alt="" src="assets/img/course/course-04.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6><a href="course-details.html">Learn Angular...</a></h6>
                                                            <p>By Dave Franco</p>
                                                            <h5>$200 <span>$99.00</span></h5>
                                                        </div>
                                                    </div>
                                                    <div class="remove-btn">
                                                        <a href="#" class="btn">Remove</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <div class="d-flex media-wide">
                                                        <div class="avatar">
                                                            <a href="course-details.html">
                                                                <img alt="" src="assets/img/course/course-14.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6><a href="course-details.html">Build Responsive Real...</a></h6>
                                                            <p>Jenis R.</p>
                                                            <h5>$200 <span>$99.00</span></h5>
                                                        </div>
                                                    </div>
                                                    <div class="remove-btn">
                                                        <a href="#" class="btn">Remove</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <div class="d-flex media-wide">
                                                        <div class="avatar">
                                                            <a href="course-details.html">
                                                                <img alt="" src="assets/img/course/course-15.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6><a href="course-details.html">C# Developers Double ...</a></h6>
                                                            <p>Jesse Stevens</p>
                                                            <h5>$200 <span>$99.00</span></h5>
                                                        </div>
                                                    </div>
                                                    <div class="remove-btn">
                                                        <a href="#" class="btn">Remove</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="total-item">
                                            <h6>Subtotal : $ 600</h6>
                                            <h5>Total : $ 600</h5>
                                        </div>
                                    </div>
                                </div>
                            </li> -->
                            <!-- <li class="nav-item wish-nav">
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                    <img src="assets/img/icon/wish.svg" alt="img">
                                </a>
                                <div class="wishes-list dropdown-menu dropdown-menu-right">
                                    <div class="wish-content">
                                        <ul>
                                            <li>
                                                <div class="media">
                                                    <div class="d-flex media-wide">
                                                        <div class="avatar">
                                                            <a href="course-details.html">
                                                                <img alt="" src="assets/img/course/course-04.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6><a href="course-details.html">Learn Angular...</a></h6>
                                                            <p>By Dave Franco</p>
                                                            <h5>$200 <span>$99.00</span></h5>
                                                            <div class="remove-btn">
                                                                <a href="#" class="btn">Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <div class="d-flex media-wide">
                                                        <div class="avatar">
                                                            <a href="course-details.html">
                                                                <img alt="" src="assets/img/course/course-14.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6><a href="course-details.html">Build Responsive Real...</a></h6>
                                                            <p>Jenis R.</p>
                                                            <h5>$200 <span>$99.00</span></h5>
                                                            <div class="remove-btn">
                                                                <a href="#" class="btn">Add to cart</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <div class="d-flex media-wide">
                                                        <div class="avatar">
                                                            <a href="course-details.html">
                                                                <img alt="" src="assets/img/course/course-15.jpg">
                                                            </a>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6><a href="course-details.html">C# Developers Double ...</a></h6>
                                                            <p>Jesse Stevens</p>
                                                            <h5>$200 <span>$99.00</span></h5>
                                                            <div class="remove-btn">
                                                                <a href="#" class="btn">Remove</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li> -->
                            <!-- <li class="nav-item noti-nav">
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                    <img src="assets/img/icon/notification.svg" alt="img">
                                </a>
                                <div class="notifications dropdown-menu dropdown-menu-right">
                                    <div class="topnav-dropdown-header">
                                        <span class="notification-title">Notifications
                                            <select>
                                                <option>All</option>
                                                <option>Unread</option>
                                            </select>
                                        </span>
                                        <a href="javascript:void(0)" class="clear-noti">Mark all as read <i class="fa-solid fa-circle-check"></i></a>
                                    </div>
                                    <div class="noti-content">
                                        <ul class="notification-list">
                                            <li class="notification-message">
                                                <div class="media d-flex">
                                                    <div>
                                                        <a href="notifications.html" class="avatar">
                                                            <img class="avatar-img" alt="" src="assets/img/user/user1.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6><a href="notifications.html">Lex Murphy requested <span>access to</span> UNIX directory tree hierarchy </a></h6>
                                                        <button class="btn btn-accept">Accept</button>
                                                        <button class="btn btn-reject">Reject</button>
                                                        <p>Today at 9:42 AM</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="notification-message">
                                                <div class="media d-flex">
                                                    <div>
                                                        <a href="notifications.html" class="avatar">
                                                            <img class="avatar-img" alt="" src="assets/img/user/user2.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6><a href="notifications.html">Ray Arnold left 6 <span>comments on</span> Isla Nublar SOC2 compliance report</a></h6>
                                                        <p>Yesterday at 11:42 PM</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="notification-message">
                                                <div class="media d-flex">
                                                    <div>
                                                        <a href="notifications.html" class="avatar">
                                                            <img class="avatar-img" alt="" src="assets/img/user/user3.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6><a href="notifications.html">Dennis Nedry <span>commented on</span> Isla Nublar SOC2 compliance report</a></h6>
                                                        <p class="noti-details">“Oh, I finished de-bugging the phones, but the system's compiling for eighteen minutes, or twenty. So, some minor systems may go on and off for a while.”</p>
                                                        <p>Yesterday at 5:42 PM</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="notification-message">
                                                <div class="media d-flex">
                                                    <div>
                                                        <a href="notifications.html" class="avatar">
                                                            <img class="avatar-img" alt="" src="assets/img/user/user1.jpg">
                                                        </a>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6><a href="notifications.html">John Hammond <span>created</span> Isla Nublar SOC2 compliance report </a></h6>
                                                        <p>Last Wednesday at 11:15 AM</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li> -->
                            <li class="nav-item user-nav">
                                <!-- <span class="text-muted mb-0" style="">Hi..<br><?php echo $fname; ?></span> -->
                                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                    <span class="user-img">
                                        <img src="ajax-files/image/<?php echo $img; ?>" alt="">
                                        <span class="status online"></span>
                                    </span>
                                </a>
                                <div class="users dropdown-menu dropdown-menu-right" data-popper-placement="bottom-end">
                                    <div class="user-header">
                                        <div class="avatar avatar-sm">
                                            <img src="ajax-files/image/<?php echo $img; ?>" alt="User Image" class="avatar-img rounded-circle">
                                        </div>
                                        <div class="user-text">
                                            <h6><?php echo $fname; ?></h6>
                                            <p class="text-muted mb-0"><?php echo $rankers_id; ?></p>
                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="dashboard.php"><i class="feather-home me-1"></i> Dashboard</a>
                                    <a class="dropdown-item" href="editProfile.php"><i class="feather-star me-1"></i> Edit Profile</a>
                                    <!-- <div class="dropdown-item night-mode">
                                        <span><i class="feather-moon me-1"></i> Night Mode </span>
                                        <div class="form-check form-switch check-on m-0">
                                            <input class="form-check-input" type="checkbox" id="night-mode">
                                        </div>
                                    </div> -->
                                    <a class="dropdown-item" href="logout.php"><i class="feather-log-out me-1"></i> Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <?php
        // if (!(isset($_SESSION['email']) && isset($_SESSION['rankers_id']))) {
        ?>
        <!-- header("Location: login.php?Please-Login-or-Create-Account"); -->
        <script>
            // window.open("login.php?Please-Login-or-Create-Account", "_self");
            // window.open("login.php");
        </script>
        <?php
        // }
        ?>