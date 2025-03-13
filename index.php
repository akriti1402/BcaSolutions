<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Rankers 2 Next Step</title>
    <link rel="shortcut icon" type="image/x-icon" href="Admin/Admin/assets/img/favicon.svg">
  <link rel="stylesheet" type="text/css" href="main.css">
  <style>
    .bg-dark1 {
      background-color: #EEBF00;
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

    @media(max-width:480px) {
      .respon {
        width: 100%;

      }

      .h {
        height: 572px;
      }

      .hp {
        height: 879px;
      }
    }


    .iround {
      border-radius: 0 50rem 50rem 0;
      background-color: white;
    }

    .round {
      border-radius: 50rem;
    }

    #intro-example {
      height: 400px;
    }


    @media (min-width: 992px) {
      #intro-example {
        height: 600px;
      }
    }



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

  <!--hero section-->
  <header>
    <div id="intro-example" class="p-5 text-center bg-image" style=" background-image:linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),url('https://i.pinimg.com/originals/67/fe/df/67fedf1203f0c00abcd9eb22718923e3.png');
      background-repeat:no-repeat;
    background-size:cover;">
      <div class="mask" style="background-color: rgba(0, 0, 0, 0);">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="" style="color:white;">
            <h2 class="mb-3">Welcome To <span style=" color:#EEBF00;"> Rankers</span> Platform</h2>
            <h5 class="mb-4">
              Here you will get sufficient content for college exams
            </h5>
            <a style="justify-content:center; align-iteams:center;" class="btn btn-outline-light btn-lg m-2 round" href="about.php" role="button" rel="nofollow" target="_blank">Learn more</a>

          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>


  <!--end of slider-->
  <!-- Start Dash Board -->
  <div class="container-fluid cont" id="bca">
    <?php
    include 'Admin/Admin/connection.php';
    $query = "SELECT course, id FROM `course`;";
    $run = mysqli_query($conn, $query);
    if (mysqli_num_rows($run) > 0) {
      while ($row = mysqli_fetch_assoc($run)) {

        echo '<div class="container" id="">
       <h1 style="text-align:center; font-family:Playfair Display; position:relative; top:20px; text-shadow:3px 3px 2px rgba(128, 117, 126, 0.76);">' . $row['course'] . '</h1> 
     <div class="row">
    <div class="col-sm-4">
      <div class="container height-100 d-flex justify-content-center align-items-center">
        <div class="card">
          <div class="clip-path">
            <h2>Notes</h2>
          </div>
    
          <div class="content text-center">
             <p>Notes of all semesters which help you to crack university examinations</p>
             <a href="semester.php?course_id=' . $row["id"] . '">Explore</a>
           </div>

</div>
</div>
    
</div>

<div class="col-sm-4">
      <div class="container height-100 d-flex justify-content-center align-items-center">
        <div class="card">
          <div class="clip-path">
            <h2>Papers</h2>
          </div>
    
          <div class="content text-center">
             <p>Only previous year paper. All semesters papers are avalable here.</p>
             <a href="paper.php?course_id=' . $row["id"] . '">Explore</a>
           </div>

</div>
</div>
    
</div>

<div class="col-sm-4">
      <div class="container height-100 d-flex justify-content-center align-items-center">
        <div class="card">
          <div class="clip-path">
            <h2>Discussion</h2>
          </div>
    
          <div class="content text-center">
             <p>Previous year paper with solution. Maths solutions are hand written</p>
             <a href="questions.php">Explore</a>
           </div>

</div>
</div>
    
</div>
</div>
</div>
</div>';
      }
    }
    ?>




    <!-- Start Dash Board -->
    <?php
    include("footer.php");
    ?>

<script>
$(document).ready(function() {
//Preloader
preloaderFadeOutTime = 500;
function hidePreloader() {
var preloader = $('.spinner-wrapper');
preloader.fadeOut(preloaderFadeOutTime);
}
hidePreloader();
});
</script>