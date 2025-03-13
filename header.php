<?php
session_start();
if (!(isset($_SESSION['email']))) {
    header("Location: login.php");
} else {
    $userid = $_SESSION['email'];
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rankers 2 Next Step</title>
    <link rel="shortcut icon" type="image/x-icon" href="Admin/Admin/assets/img/favicon.svg">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="font.css">
    <style>
        * {
            font-family: Blippo;
        }

        .my-0 {
            position: relative;
            top: 3rem;
            border-radius: 0px;
            background-color: antiquewhite;
        }

        .wrapper {
            background-color: #FFFFFF;
        }

        nav {
            box-shadow: 0px 15px 10px -15px #111;
        }

        .navbar-nav>li {
            padding-left: 13px;
            padding-right: 13px;
            font-size: 18px;
            font-family: Blippo;
            font-weight: bold;
        }

        .bg-dark1 {
            background-color: #EEBF00;
            color: black;

        }

        .bg-dark2 {
            background-color: #D17902;
            color: black;

        }

        .form-control {
            border: none;
            border-radius: 50rem;
            line-height: 2;
            padding-top: 0px;
        }

        .map {
            height: 100%;
            background-image: linear-gradient(rgba(35, 43, 56, 0.9),
                    rgba(209, 121, 2, 1)),
                url('map.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            position: relative;
            bottom: 20px;
        }

        .foot_color p>a {
            color: black;
            text-decoration: none;
        }

        .foot_color p>a:hover {
            color: white;
        }

        .foot_c a:hover {
            color: white;
        }


        .iround {
            border-radius: 0 50rem 50rem 0;
            background-color: white;
        }

        .round {
            border-radius: 50rem;
        }

        .cont {

            width: 100%;
            background-image: linear-gradient(rgba(209, 121, 2, 1),
                    rgba(255, 255, 255, 1));
            background-size: cover;
            background-repeat: no-repeat;

        }

        .btn {
            border-radius: 40px;
            margin-right: 10px;
            box-shadow: 0px 1px 5px 0px;
            font-size: 18px;
            font-family: Blippo;
            font-weight: bold;
        }

        .dropdown-menu,
        .card .bt {
            box-shadow: 0px 5px 10px 0px;
        }

        .dropdown-item:hover {
            background-color: black;
            opacity: 0.4;
            color: #EEBF00;
        }

        .scrollable-menu {
            height: auto;
            max-height: 200px;
            overflow-x: hidden;
        }

        h1,
        h4 {
            top: 20px;
            text-shadow: 3px 3px 2px rgba(128, 117, 126, 0.76);
        }

        .bt-content {
            overflow: auto;
            width: 5000px;
            color: black;
            background-color: white;
            border: none;
            box-shadow: none;

        }

        .btn-secondary:hover,
        .btn-secondary:focus {

            color: black;
            background-color: white;
            border: none;
            box-shadow: none;
        }
    </style>
</head>

<body>



    <nav class="navbar navbar-expand-sm bg-dark2 navbar-light fixed-top">
        <!-- style="position:fixed; bottom:-27px; left:2px;"-->
        <a class="navbar-brand" href="javascript:void(0)" href="#">
            <img src="Images/newLogoScap.png" width="150px" height="109px" style="position:fixed; top:-24px; " alt="logo" /> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">

            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <!--justify-content-center-->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Course
                    </a>

                    <div class="dropdown-menu cont scrollable-menu" aria-labelledby="navbarDropdown">
                        <?php
                        include 'Admin/Admin/connection.php';
                        $query = "SELECT * FROM `course`;";
                        $run = mysqli_query($conn, $query);
                        if (mysqli_num_rows($run) > 0) {
                            while ($row = mysqli_fetch_assoc($run)) {
                                // $course_id = $_GET['course_id'];

                        ?>
                                <a class="dropdown-item" href="semester.php?course_id=<?php echo $row['id']; ?>"><?php echo $row["course"]; ?></a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Papers
                    </a>
                    <div class="dropdown-menu cont scrollable-menu" aria-labelledby="navbarDropdown">
                        <!--  <a class="dropdown-item" href="paper.php?course_id=16">BCA- papers</a>
                        <a class="dropdown-item" href="paper.php?course_id=17">BSc-CS- paper</a>-->
                        <?php
                        include 'Admin/Admin/connection.php';
                        // $course_id = $_GET['course_id'];

                        $Nquery = "SELECT * FROM `course`;";
                        $Nrun = mysqli_query($conn, $Nquery);
                        if (mysqli_num_rows($Nrun) > 0) {
                            while ($row = mysqli_fetch_assoc($Nrun)) {


                        ?>
                                <a class="dropdown-item" href="paper.php?course_id=<?php echo $row['id']; ?>"><?php echo $row["course"]; ?>-papers</a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>

            </ul>
            <div class="col-md-3 text-end ms-auto" style="margin-right:2px;">
                <?php
                // session_start();
                $RankersId =  $_SESSION['rankers_id'];
                $email =  $_SESSION['email'];
                if (!empty($email)) {
                    echo ' <a href="index.php"><button type="button" class="btn btn-sm btn-outline-dark bt">' . $RankersId . '</button></a>';
                    echo '<a href="logout.php"><button type="button" class="btn btn-sm btn-outline-dark bt">Logout</button></a>';
                } else {
                    echo '<a href="login.php"><button type="button" class="btn btn-sm btn-outline-dark bt">Login</button></a>';
                }
                ?>

                </a><!--style="position:fixed; right:105px;"-->
            </div>
        </div>

    </nav>

    <script src="header.js"></script>


    <!-- JavaScript Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</body>

</html>