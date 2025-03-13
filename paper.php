<style>
    .height-100 {
        height: 75vh;
    }

    .card {

        width: 400px;
        height: 330px;
        border: none;
        border-radius: 20px;
        overflow: hidden;
        cursor: pointer;
    }

    .card:hover .clip-path {
        clip-path: circle(320px at center 0);
    }

    .clip-path {
        position: relative;
        width: 100%;
        height: 100%;
        clip-path: circle(150px at center 0);
        background: #EEBF00;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: all 0.3s;
    }

    .clip-path h2 {
        color: black;
        font-size: 30px;
    }

    .content {

        padding: 15px;


    }

    .content p {
        font-size: 15px;

    }

    .content a {

        width: 100px;
        height: 100px;
        background-color: #D17902;
        color: #fff !important;
        padding: 7px;
        border-radius: 6px;
        padding-left: 20px;
        padding-right: 20px;
        font-size: 12px;
        text-decoration: none;

    }

    .content a:hover {

        background-color: black;
        color: black;
        text-decoration: none;
    }
</style>
<?php
include("header.php");
?>
<?php include 'Admin/Admin/connection.php'; ?>
<div class="container-fluid cont">
    <div class="container">

        <?php
        $course_id = $_GET['course_id'];
        $sql = "select * from course where id='$course_id' ";
        $run = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($run)) {
            $courseName = $row['course'];
        }
        ?>
        <h1 style="text-align:center; font-family:Playfair Display; position:relative; top:80px; margin-top:15px; margin-bottom:35px;"><?php echo $courseName; ?>-Previous year Papers</h1>
        <div class="row">


            <?php
            $query = "SELECT sem, course FROM `semester` WHERE course='$courseName' ";
            $run = mysqli_query($conn, $query);
            if (mysqli_num_rows($run) > 0) {
                while ($row = mysqli_fetch_assoc($run)) {
                    $semesterName = $row['sem'];
                    $courseName = $row['course'];

                    echo ' <div class="col-sm-4">
           <div class="container height-100 d-flex justify-content-center align-items-center">
             <div class="card">
                 <div class="clip-path">
                     <h2>' . $row['sem'] . '</h2>
                  </div>
    
                  <div class="content text-center">
                     <p>Pevious year paper of '  . $row['sem'] . ' is available here with solution.</p>
                     <a href="paper-year.php?semesterName=' . $semesterName . '&courseName=' . $courseName . '">Explore</a>
                   </div>

                 </div>
             </div>
    
           
           </div>';
                }
            }
            ?>



        </div>
    </div>
</div>
<!-- Start Dash Board -->
<?php
include("footer.php");
?>