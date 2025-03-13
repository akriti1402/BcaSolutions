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
                <!-- <h3>Recent Post</h3> -->
                <?php
                if (isset($_POST['Search'])) {
                    $searchText = $_POST['searchText'];
                    $Ssql = "SELECT `Forum_question`.`question` ,`Forum_question`.`id`, `signup`.`fname`
                            FROM `Forum_question` JOIN 
                            `signup` ON 
                            `Forum_question`.`userid` =  `signup`.`email` 
                            WHERE  UPPER(`Forum_question`.`question`) LIKE  UPPER('%$searchText%')";
                    $Srun = mysqli_query($conn, $Ssql);
                    $i = 1;
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


        </main>


    </div>
</div>


<?php
include("footer.php");
?>