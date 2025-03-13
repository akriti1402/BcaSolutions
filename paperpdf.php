<?php include('header.php'); ?>

<body>
    <div class="container mt-10 mb-10">

        <!-- <h1 style="color:white;">gnjk</h1> -->
        <div style="text-align:center; margin-top:3rem;">
            <?php
            include 'Admin/Admin/connection.php'; ?>
            <?php
            $sid = $_GET['sid'];
            $courseName = $_GET['c'];
            $semesterName = $_GET['s'];
            $Pid = $_GET['Pid'];
            // $query = "SELECT * FROM `paper` WHERE sem='$semesterName' AND course='$courseName' AND sub='$sid' ";
            $query = "SELECT * FROM `paper` WHERE `id` = '$Pid' ";

            $run = mysqli_query($conn, $query);
            if (mysqli_num_rows($run) > 0) {

                while ($row = mysqli_fetch_assoc($run)) {

            ?>
                    <iframe src="https://docs.google.com/viewer?url=http://bcasolutions.rf.gd/Admin/Admin/ajax-files/image/<?php echo $row['banner']; ?>&embedded=true" frameborder="0" height="800px" width="100%"></iframe>

            <?php
                }
            }
            ?>
        </div>
        <h1></h1>
    </div>
</body>

<?php include('footer.php'); ?>