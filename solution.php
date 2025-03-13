<?php
session_start();
if (!(isset($_SESSION['email']))) {
  header("Location: login.php");
} else {
  $userid = $_SESSION['email'];
}
?>

<?php
include("header.php");
include("Admin/Admin/connection.php");
?>

<style>
  .topic {
    margin-top: 20px;
    justify-content: center;
    text-align: center;
  }

  main {
    margin: 20px;
  }

  .discussion {
    margin-top: 23px;
    margin-bottom: 20px;
  }

  .post {
    display: flex;
    padding: 10px;

  }

  .post-author {
    width: 100%;
  }

  .profile-image {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    overflow: hidden;
    margin-right: 10px;
  }

  .profile-image img {
    width: 100%;
    height: auto;
  }

  .post-content {
    margin-top: 10px;
  }

  .create-post {
    margin-top: 20px;
    width: 100%;
  }

  .form-group {
    margin-bottom: 10px;
  }

  label {
    font-weight: bold;
  }

  input[type="text"],
  textarea {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 6px;
  }

  button[type="submit"] {
    background-color: black;
    color: white;
    padding: 5px 10px;
    border: black;
    border-radius: 50rem;
    cursor: pointer;
  }

  button[type="submit"]:hover {
    background-color: #D17902;
    color: black;
  }

  .btn-more {
    margin: 10px;
    border: black;
    border-radius: 50rem;
    background-color: black;
    color: white;
  }

  .btn-more:hover {
    background-color: #D17902;
    color: black;
  }

  #more {
    display: none;
  }
</style>
<div class="container-fluid cont">
  <div class="container">
    <br><br><br><br>
    <main>
      <section class="topic">
        <h3><b>Topic Title</b></h3>
        <div class="topic-content">
          <h4 style="color:EEBF00">Welcome to <img src="Images/newLogoScap.png" width="170px" height="110px" alt="logo" /> disscussion forum.</h4>
        </div>

        <input type="text" class="form-group" placeholder="Search Your Query">
      </section>

      <section class="create-post">
        <h3>Create a Post</h3>
        <form method="post">
          <div class="form-group">
            <label for="content">Query:</label>
            <textarea id="question" name="question" placeholder="Ask your query......" required></textarea>
          </div>
          <button class="btn" name="submit" type="submit">Submit</button>
        </form>
      </section>
      <?php
      if (isset($_POST['submit'])) {
        $question = $_POST['question'];

        $inQry = "INSERT INTO `Forum_question` (`id`, `question`, `userid`, `updated_on`, `status`)
                             VALUES (NULL, '$question', '$userid', current_timestamp(), 'active')";
        $inRun = mysqli_query($conn, $inQry);
        if ($inRun) {
          echo '<script>alert("Your query has been submitted successfully!!");</script>';
        } else {
          echo '<script>alert("Oops!! Something Wrong");</script>';
        }
      }
      ?>

      <section class="discussion">
        <h3>Discussion</h3>
        <div class="post">
          <div class="profile-image">
            <img src="Images/newLogoScap.png" alt="Profile Image">
          </div>

          <div class="post-author">
            <h5>John Doe</h5>
            <p><a href="discussion.php">How can I improve my coding skills?</a></p>
          </div>
        </div>
        <!-- <div class="post">
          <div class="profile-image">
            <img src="Images/newLogoScap.png" alt="Profile Image">
          </div>

          <div class="post-author">
            <h5>John Doe</h5>
            <p><a href="discussion.php">How can I improve my coding skills?</a></p>
          </div>
        </div>
        <div class="post">
          <div class="profile-image">
            <img src="Images/newLogoScap.png" alt="Profile Image">
          </div>

          <div class="post-author">
            <h5>John Doe</h5>
            <p>How can I improve my coding skills?</p>
          </div>
        </div>
        <div class="post">
          <div class="profile-image">
            <img src="Images/newLogoScap.png" alt="Profile Image">
          </div>

          <div class="post-author">
            <h5>John Doe</h5>
            <p>How can I improve my coding skills?</p>
          </div>
        </div>

        <span id="dots"></span><span id="more">
          <div class="post">
            <div class="profile-image">
              <img src="profile.jpg" alt="Profile Image">
            </div>

            <div class="post-author">
              <h5>John Doe</h5>
              <p>How can I improve my coding skills?</p>
            </div>
            < </div>
              <div class="post">
                <div class="profile-image">
                  <img src="profile.jpg" alt="Profile Image">
                </div>

                <div class="post-author">
                  <h5>John Doe</h5>
                  <p><a href="discussion.php">How can I improve my coding skills?</a></p>
                </div>

              </div>
              <div class="post">
                <div class="profile-image">
                  <img src="profile.jpg" alt="Profile Image">
                </div>

                <div class="post-author">
                  <h5>John Doe</h5>
                  <p><a href="dicussion.php">How can I improve my coding skills?</a></p>
                </div>
              </div>
        </span> -->

        <button onclick="myFunction()" id="myBtn" class="btn btn-more">More posts</button>

        <script>
          function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
              dots.style.display = "inline";
              btnText.innerHTML = "More posts";
              moreText.style.display = "none";
            } else {
              dots.style.display = "none";
              btnText.innerHTML = "Less posts";
              moreText.style.display = "inline";
            }
          }
        </script>



  </div>
</div>


<?php
include("footer.php");
?>