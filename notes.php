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
<link rel="stylesheet" href="header.css">


<?php include('header.php'); ?>
<?php include 'Admin/Admin/connection.php'; ?>
<div class="container-fluid cont">
  <div class="container mb-5">
    <h1 style="text-align:center; font-family:Playfair Display; position:relative; top:90px; margin-bottom:6rem;">Subjects</h1>
    <div class="row">
      <?php
      $courseName = $_GET['courseName'];
      $semesterName = $_GET['semesterName'];
      $query = "SELECT * FROM `subject` WHERE semester='$semesterName' AND course='$courseName'";
      $run = mysqli_query($conn, $query);
      if (mysqli_num_rows($run) > 0) {
        while ($row = mysqli_fetch_assoc($run)) {


      ?>
          <a style="text-decoration:none;" href="unit.php?Uid=<?php echo $row['id']; ?>&s=<?php echo $semesterName; ?>&c=<?php echo $courseName; ?>&si=<?php echo $row['id']; ?>">
            <div class="card mb-4" style="max-width: 100%;  background-color:#FFFADA;">
              <div class="row g-0">
                <div class="col-md-2">
                  <img src="book.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-10">
                  <div class="card-body">
                    <center>
                      <div class="btn-group" style="max-width:100%;">
                        <span class="btn btn-secondary btn-sm  bt-content">
                          <b><?php echo $row['subject']; ?></b>
                        </span>
                      </div>
                    </center>
                    <small style="font-size:12px; position:relative; top:3px; left:3px;" class="text-muted">Last updated<?php echo $row['updated_on']; ?></small>
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


<script src="header.js"></script>

<?php
include("footer.php");
?>