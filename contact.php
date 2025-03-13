<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Include library files 
require 'PHPMailer-master/Exception.php';
require 'PHPMailer-master/PHPMailer.php';
require 'PHPMailer-master/SMTP.php';


if (isset($_POST['submit'])) {

  $mail = new PHPMailer(true);

  // Server settings 
  //$mail->SMTPDebug = SMTP::DEBUG_SERVER;    //Enable verbose debug output 
  $mail->isSMTP();                            // Set mailer to use SMTP 
  $mail->Host = 'smtp.gmail.com';
  // Specify main and backup SMTP servers 
  $mail->SMTPAuth = true;                     // Enable SMTP authentication 
  $mail->Username = 'rankers2nextstep@gmail.com';       // SMTP username 
  $mail->Password = 'unjcbmyuaykkoixt';         // SMTP password 
  $mail->SMTPSecure = 'ssl';                  // Enable TLS encryption, `ssl` also accepted 
  $mail->Port = 465;                     // SMTP password 
  $mail->setFrom('rankers2nextstep@gmail.com');
  $mail->addAddress($_POST["email"]);
  $mail->isHTML(true);

  // Mail subject 
  $mail->Subject = $_POST['subject'];

  // Mail body content 

  $mail->Body = $_POST['message'];
  $mail->Subject = $_POST['subject'];


  if (!$mail->send()) {
    // echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;
    echo '<div class="alert alert-danger my-0">
   <a href="#" class="close" data-dismiss="alert">&times;</a>
   <strong>Fail!</strong>Message has not been sent.Please try later.
  </div>';
  } else {
    // echo 'Message has been sent.'; 
    echo  '<div class="alert alert-success my-0">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Success!</strong>Message has been sent.
   </div>';
  }
}
?>



<style>
  .form {
    width: 300px;
  }
</style>
<?php
include("header.php");
?>


<div class="cont">
  <div class="container">
    <h1 style="text-align:center; font-family:Playfair Display; position:relative; top:80px;">Get In Touch</h1>

    <center>
      <div>
        <form style="width:340px; max-width:600px; margin-top:120px;" method="POST" action="">


          <div class="row;">
            <!-- <div class="form-group mb-3">
                   <input type="text" name="fname" placeholder="First Name" class="form-control"  required>
                </div>-->
            <!--  <div class="form-group mb-3">
                    <input type="text" name="lname" placeholder="Last Name" class="form-control">
                </div>-->
          </div>
          <div class="form-group mb-3">
            <input type="email" name="email" placeholder="Email Id" class="form-control" required>
          </div>
          <div class="form-group mb-3">
            <input type="text" name="subject" placeholder="your subject" class="form-control">

          </div>

          <div class="form-group mb-3">
            <textarea placeholder="Your Message" type="message" name="message" class="form-control" required></textarea>
          </div>
          <center>
            <div class="form-group mb-3 justify-content-center">
              <button type="submit" name="submit" class="btn btn-outline-dark">Submit</button>
            </div>
          </center>
        </form>
      </div>
      <!-- <div class="col-md-5 col-lg-4 ml-lg-0" style="padding-top:25px; margin-bottom:5px;">
        <a href="https://www.facebook.com/" class="text-dark me-4">
          <i class="fa-brands fa-facebook fa-lg"></i>
        </a>
        <a href="https://www.twitter.com/" class="text-dark me-4">
          <i class="fa-brands fa-twitter fa-lg"></i>
        </a>
        <a href="https://mail.google.com/" class="text-dark me-4">
          <i class="fa-brands fa-google fa-lg"></i>
        </a>

        <a href="https://www.linkedin.com/" class="text-dark me-4">
          <i class="fa-brands fa-linkedin fa-lg"></i>
        </a>
      </div> -->
    </center>

  </div>
</div>

</div>
</div>&nbsp&nbsp&nbsp




</section>
<?php
include("footer.php");
?>