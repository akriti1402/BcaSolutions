<?php
include "header.php";
include("Admin/Admin/connection.php");
?>

<style>
    body {
        overflow-x: hidden;
    }

    /* Toggle Styles */

    #wrapper {
        padding-left: 0;
        -webkit-transition: all 0.6s ease;
        -moz-transition: all 0.6s ease;
        -o-transition: all 0.6s ease;
        transition: all 0.6s ease;
    }

    #wrapper.toggled {
        padding-left: 270px;
        //200;
    }

    #sidebar-wrapper {
        z-index: 1000;
        position: absolute; // fixed;
        left: 250px;

        width: 0;
        height: -webkit-fill-available;
        // height:100%;
        margin-left: -250px;
        overflow-y: auto !important;
        background-color: #D17902 !Important;

        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }

    #wrapper.toggled #sidebar-wrapper {
        width: 0;
        //padding-left: 8rem;
    }

    #page-content-wrapper {
        width: 100%;
        position: absolute;
        padding: 10px;
    }

    #wrapper.toggled #page-content-wrapper {
        position: absolute;
        // margin-left:-250px;
    }

    /* Sidebar Styles */

    .sidebar-nav {
        position: absolute;
        top: 0;
        right: 15px;
        width: 200px;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .sidebar-nav li {
        text-indent: -7px; //20px;
        line-height: 40px;
    }

    .sidebar-nav li a {
        display: block;
        text-decoration: none;
        color: black;
    }

    .sidebar-nav li a:hover {
        text-decoration: none;
        color: #fff;
        // background: #312A25;
    }

    .sidebar-nav li a:active,
    .sidebar-nav li a:focus {
        text-decoration: none;
    }

    .sidebar-nav>.sidebar-brand {
        height: 65px;
        font-size: 18px;
        line-height: 60px;
    }

    .sidebar-nav>.sidebar-brand a {
        color: #999999;
    }

    .sidebar-nav>.sidebar-brand a:hover {
        color: #fff;
        background: none;
    }

    @media(min-width:768px) {
        #wrapper {
            padding-left: 220px;
        }

        #wrapper.toggled {
            padding-left: 0;
        }

        #sidebar-wrapper {
            width: 250px; //200px;
        }

        #wrapper.toggled #sidebar-wrapper {
            width: 50px; // 40px;
            // padding-left: 8rem;


        }

        #wrapper.toggled span {
            visibility: hidden;

        }

        #wrapper.toggled i {
            float: right;

        }

        #page-content-wrapper {
            padding: 20px;
            position: relative;
        }

        #wrapper.toggled #page-content-wrapper {
            position: relative;
            margin-right: 0;
        }
    }


    @media(max-width:414px) {

        #wrapper.toggled #page-content-wrapper {
            position: absolute;
            margin-right: 60px;
        }

        #wrapper.toggled {
            padding-right: 60px;
        }

        #wrapper {
            padding-left: 20px;
        }

        #wrapper.toggled {
            padding-left: 0;
        }

        #sidebar-wrapper {
            width: 50px;
        }

        #wrapper.toggled #sidebar-wrapper {
            width: 140px;


        }

        #wrapper.toggled span {
            visibility: visible;
            position: relative;
            left: 70px;
            bottom: 13px;
            font-size: 10px;
            line-height: 40px;


        }

        #wrapper span {
            visibility: hidden;

        }

        #wrapper.toggled i {
            float: right;
        }

        #wrapper i {
            float: right;
        }

        #page-content-wrapper {
            padding: 5px;
            position: relative;
        }

        #wrapper.toggled #page-content-wrapper {
            position: relative;
            margin-right: 0;
        }
    }
</style>


<div class="container-fluid" style="margin-top:39px;">
    <div class="container">
        <div class="row">
            <hr />
            <div id="wrapper">
                <!-- Sidebar -->
                <div id="sidebar-wrapper">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <ul class="sidebar-nav" style="margin-left:0;">
                            <li class="sidebar-brand">

                                <a href="#menu-toggle" id="menu-toggle" style="margin-top:20px;float:right;"> <i class="fa fa-bars " style="font-size:20px !Important;" aria-hidden="true" aria-hidden="true"></i> </a>

                            </li>
                            <div class="d-flex">
                                <li> <a href="#"><i class="fa fa-sort-alpha-asc " aria-hidden="true"> </i> <span style="margin-left:10px; line-height:30px;"><b>It tools and its & applicatations</b></span> </a></li>
                            </div>
                            <?php
                            if (isset($_GET['s'])) {
                                $Uid = $_GET['Uid'];
                                $s = $_GET['s'];
                                $c = $_GET['c'];
                            }
                            ?>
                            <?php
                            $NSql1 = "SELECT * FROM `unit`  WHERE sem='$s' AND course='$c' AND sub='$Uid' ";

                            $Nrun1 = mysqli_query($conn, $NSql1);
                            while ($Nrow1 = mysqli_fetch_assoc($Nrun1)) {
                                //echo $Nrow1['unit'];


                            ?>
                                <li>
                                    <a href="unit1.php?Uid=<?php echo $Nrow1['id']; ?>&s=<?php echo $s; ?>&c=<?php echo $c; ?>"><span style="margin-left:10px;"><?php echo $Nrow1['unit']; ?></span> </a>
                                </li>
                            <?php } ?>
                            <!--

                                        <li>  <span style="margin-left:10px;"><?php echo $Nrow1['unit']; ?></span>
                                            <a href="#"> <i class="fa fa-play-circle-o " aria-hidden="true"> </i> <span style="margin-left:10px;"> Section </span> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-puzzle-piece" aria-hidden="true"> </i> <span style="margin-left:10px;"> Section </span> </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-font" aria-hidden="true"> </i> <span style="margin-left:10px;"> Section </span> </a>
                                        </li>
                                        
                                    -->

                        </ul>
                    </div>
                </div>
                <!-- /#sidebar-wrapper   <i class="fa-solid fa-circle" aria-hidden="true"> </i>-->

                <!-- Page Content -->
                <div id="page-content-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <?php
                                if (isset($_GET['Uid'])) {
                                    $Uid = $_GET['Uid'];
                                    $NSql = "SELECT * FROM `unit`  WHERE  `id` = '$Uid'";
                                    $Nrun = mysqli_query($conn, $NSql);
                                    $Nrow = mysqli_fetch_assoc($Nrun);
                                }
                                ?>
                                <h3><?php echo $Nrow['unit']; ?></h3>
                                <p class="lead">
                                    <iframe src="Admin/Admin/ajax-files/image/<?php echo $Nrow['detail']; ?>" frameborder="0" height="500px" width="100%"></iframe>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>



                <!--</a>

</li>
</ul>-->
            </div>
        </div>
    </div>
</div>
</div>
</div>

<!-- /#page-content-wrapper -->


<!-- /#wrapper -->


<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>



<?php include "footer.php"; ?>