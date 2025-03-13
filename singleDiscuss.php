<?php
// session_start();
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
                <form action="SearchResult.php" method="POST" style="display: flex;">
                    <input type="text" name="searchText" class="form-group" placeholder="Search Your Query......">
                    <input type="submit" name="Search" class="btn" value="Search">
                </form>

            </section>
            <section class="create-post">
                <?php
                if (isset($_POST['Search'])) {
                    $searchText = $_POST['searchText'];
                    $Ssql = "SELECT `Forum_question`.`question` ,`Forum_question`.`id`, `signup`.`fname`
                            FROM `Forum_question` JOIN 
                            `signup` ON 
                            `Forum_question`.`userid` =  `signup`.`email` 
                            WHERE  UPPER(`Forum_question`.`question`) LIKE  UPPER('%$searchText%')";
                    $Srun = mysqli_query($conn, $Ssql);
                    while ($Srow = mysqli_fetch_assoc($Srun)) {
                ?>
                        <a href="singleDiscuss.php?id=<?php echo $Srow['id'] ?>" style="text-decoration: none;">
                            <div class="post-author">
                                <h4 style="font-size: larger;"><?php echo $i . " . " . $Srow['question']; ?>
                                    <em>By - <?php echo $Srow['fname']; ?></em>
                                </h4>
                            </div>
                        </a>
                <?php
                    }
                }
                ?>
                <h3>Recent Post</h3>

                <?php
                $Qid = $_GET['id'];
                $Psql = "SELECT `Forum_question`.`question` ,`Forum_question`.`id`, `signup`.`fname`
                        FROM `Forum_question` JOIN 
                        `signup` ON 
                        `Forum_question`.`userid` =  `signup`.`email` 
                        WHERE  `Forum_question`.`id` = '$Qid'";
                $Prun = mysqli_query($conn, $Psql);

                $Pdata = mysqli_fetch_assoc($Prun)
                ?>
                <br>
                <a href="singleDiscuss.php?id=<?php echo $Pdata['id'] ?>" style="text-decoration: none;">
                    <div class="post-author">
                        <h4 style="font-size: larger;"><?php echo $Pdata['question']; ?>
                            <em>By - <?php echo $Pdata['fname']; ?></em>
                        </h4>
                    </div>
                </a>

            </section>
            <section class="discussion">
                <h3>Discussion</h3>

                <?php
                $Psql = "SELECT `Forum_ans`.`ans` ,`Forum_ans`.`id`, `signup`.`fname`, `signup`.`image`
                             FROM `Forum_ans` JOIN 
                             `signup` ON 
                             `Forum_ans`.`ans_by` =  `signup`.`email` 
                             WHERE `Forum_ans`.`question_id` = '$Qid'                       
                             ORDER BY `Forum_ans`.`id` ASC";
                $Prun = mysqli_query($conn, $Psql);
                while ($Pdata = mysqli_fetch_assoc($Prun)) {


                ?>
                    <div class="post">
                        <div class="profile-image">
                            <?php if (!empty($Pdata['image'])) {
                            ?>
                                <img src="Admin/Admin/ajax-files/image/<?php echo $Pdata['image']; ?>" alt="Profile Image">
                            <?php
                            } else {
                                echo '<img src="Images/newLogoScap.png" alt="Profile Image">';
                            }
                            ?>
                        </div>

                        <div class="post-author">
                            <h6><?php echo $Pdata['ans']; ?> By- <em><?php echo $Pdata['fname']; ?></em> </h6>
                        </div>
                    </div>
                <?php
                }
                ?>

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
            </section>
            <section class="create-post">
                <h3>Write your own ans.</h3>
                <form method="post">
                    <div class="form-group">
                        <label for="content">Ans:</label>
                        <textarea id="ans" name="ans" placeholder="Write your own ans......" required></textarea>
                    </div>
                    <button class="btn" name="submit" type="submit">Submit</button>
                    <input type="text" hidden name="Qid" value="<?php echo $Pdata['id']; ?>">
                </form>
            </section>
            <?php
            if (isset($_POST['submit'])) {
                $ans = $_POST['ans'];
                $Qid  = $_POST['Qid'];

                $inQry = "INSERT INTO `Forum_ans` (`id`, `question_id`, `ans`, `ans_by`, `ans_on`) 
                            VALUES (NULL, '$Qid', '$ans', '$userid', current_timestamp())";
                $inRun = mysqli_query($conn, $inQry);
                if ($inRun) {
                    echo '<script>alert("Your ans has been submitted successfully!!");</script>';
                } else {
                    echo '<script>alert("Oops!! Something Wrong");</script>';
                }
            }
            ?>
        </main>


    </div>
</div>


<?php
include("footer.php");
?>