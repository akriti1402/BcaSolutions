<?php
include("header.php");
include("Admin/Admin/connection.php");

?>

<style>
    @media screen and (max-width:612px) {
        .dis {
            display: none;
        }
    }

    .dis {
        background-color: #D17902;
    }

    .dis div a,
    .dis div span {

        color: #3e2108ab;
    }

    .dis div span:hover {
        color: black;
    }

    .bg-mar {
        margin-top: 55px !important;

    }


    #Iframe-Master-CC-and-Rs {
        max-width: 512px;
        max-height: 100%;
        overflow: hidden;
    }

    /* inner wrapper: make responsive */
    .responsive-wrapper {
        position: relative;
        height: 0;
        /* gets height from padding-bottom */


    }

    .responsive-wrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;

        margin: 0;
        padding: 0;
        border: none;
    }

    .responsive-wrapper-wxh-572x612 {
        padding-bottom: 107%;
    }

    .set-border {
        border: 5px inset #4f4f4f;
    }

    .set-box-shadow {
        -webkit-box-shadow: 4px 4px 14px #4f4f4f;
        -moz-box-shadow: 4px 4px 14px #4f4f4f;
        box-shadow: 4px 4px 14px #4f4f4f;
    }

    .set-padding {
        padding: 40px;
    }

    .set-margin {
        margin: 30px;
    }

    .center-block-horiz {
        margin-left: auto !important;
        margin-right: auto !important;
    }
</style>

<div class="container-fluid">
    <div class="bg-mar"></div>
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 dis">


            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">

                <?php
                if (isset($_GET['s'])) {
                    $Uid = $_GET['Uid'];
                    $s = $_GET['s'];
                    $c = $_GET['c'];
                    $si = $_GET['si'];

                    $Ssql = "SELECT * FROM `subject` WHERE `id` = '$si'";
                    $Ssrun = mysqli_query($conn, $Ssql);
                    $Srow = mysqli_fetch_assoc($Ssrun);
                }
                ?>
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline m" style="color:black;font-weight:800;"><?php echo $Srow['subject']; ?></span>
                </a>

                <ul class=".navbar-light  nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start navbar-nav ms-auto" id="menu">
                    <?php

                    $NSql1 = "SELECT * FROM `unit`  WHERE sem='$s' AND course='$c' AND `sub` = '$si' ";
                    $Nrun1 = mysqli_query($conn, $NSql1);
                    while ($Nrow1 = mysqli_fetch_assoc($Nrun1)) {
                    ?>

                        <li class="nav-item">
                            <a href="unit.php?Uid=<?php echo $Nrow1['id']; ?>&s=<?php echo $s; ?>&c=<?php echo $c; ?>&si=<?php echo $si; ?>" class="nav-link align-middle px-0">
                                <span class="ms-1 d-none d-sm-inline"><?php echo $Nrow1['unit']; ?></span>
                            </a>
                        </li>
                    <?php   } ?>

                </ul>
                <hr>

            </div>
        </div>
        <div class="col py-3">
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


                <iframe src="https://docs.google.com/viewer?url=http://bcasolutions.rf.gd/Admin/Admin/ajax-files/image/<?php echo $Nrow['detail']; ?>&embedded=true" frameborder="0" height="800px" width="100%"></iframe>

            </p>
        </div>
    </div>
</div>
<!-- new navbar-->


<?php
include("footer.php");
?>