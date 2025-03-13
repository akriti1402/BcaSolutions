<style>
  .dropdown-menu li a {
    align-items: center;
    text-decoration: none;
    font-family: Playfair Display;
  }

  h1::before {
    content: "";
    display: block;
    position: absolute;
    bottom: 6px;
    left: 40%;
    width: 20%;
    height: 3px;
    background: #EEBF00;
    transition: transform 0.2s ease-in-out;
    transform: scale(0);
  }

  h1 {
    transform: scale(1);
  }
</style>
<?php include('header.php'); ?>
<!--//https://image.slidesharecdn.com/applicationofinformationtechnologyingik-161118081802/95/application-of-information-technology-in-gi-k-5-638.jpg?cb=1529479206"-->
<?php include 'Admin/Admin/connection.php'; ?>
<div class="container-fluid cont">
  <div class="container mb-5">
    <h1 style="text-align:center; font-family:Playfair Display; position:relative; top:90px; margin-bottom:6rem;">Previous year papers</h1>
    <div class="row">
      <?php
      $courseName = $_GET['courseName'];
      $semesterName = $_GET['semesterName'];
      $query = "SELECT * FROM `paper` WHERE sem='$semesterName' AND course='$courseName'";

      $run = mysqli_query($conn, $query);
      if (mysqli_num_rows($run) > 0) {
      }
      while ($row = mysqli_fetch_assoc($run)) {
        $sid = $row['sub'];
      }
      ?>
      <?php
      $NSql = "SELECT `paper`.`year`,`paper`.`id` ,`paper`.`updated_on`, `paper`.`banner` , `subject`.`subject`
                               FROM `paper` JOIN `subject`
                               ON `paper`.`sub` = `subject`.`id`
                               WHERE  `paper`.`course`='$courseName' AND `paper`.`sem`='$semesterName'";
      $Nrun = mysqli_query($conn, $NSql);
      if (mysqli_num_rows($Nrun) > 0) {
        while ($Nrow = mysqli_fetch_assoc($Nrun)) {

      ?>

          <a style="text-decoration:none;" href="paperpdf.php?Pid=<?php echo $Nrow['id']; ?>&s=<?php echo $semesterName; ?>&c=<?php echo $courseName; ?>&sid=<?php echo $sid; ?>">
            <div class="card mb-4" style="max-width: 100%;  background-color:#FFFADA;">
              <div class="row g-0">
                <div class="col-md-2">
                  <img src="https://www.bl.uk/britishlibrary/~/media/bl/global/dl%20childrens%20literature/activities/marshall-miniature-activity.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-10">
                  <div class="card-body">
                    <center>
                      <div class="btn-group" style="max-width:100%;">
                        <!--<button class="btn btn-secondary btn-sm" type="button">-->
                        <span class="btn btn-secondary btn-sm  bt-content"><!-- type="button" data-bs-toggle="dropdown" aria-expanded="false">-->
                          </b> <?php echo $Nrow['subject']; ?></b>
                        </span>
                      </div>
                    </center>

                    <small style="font-size:12px; position:relative; top:3px; left:3px; text-decoration:none;" class="text-muted">Last updated :-<?php echo $Nrow['updated_on']; ?></small>
                  </div>
                </div>
              </div>
            </div>
          </a>
      <?php
        }
      }
      ?>
    </div>
  </div>
</div>
<?php
include("footer.php");
?>