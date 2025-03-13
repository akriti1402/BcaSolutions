<?php
include("../connection.php");

//   Get data from the Signup page
if (isset($_POST['fname']) && isset($_POST['email']) && isset($_POST['password'])) {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $passwordEnc = convert_uuencode($password);
    // $password = md5($password);

    // For Generate Rankers id
    date_default_timezone_set("Asia/Kolkata");
    $date = date("d/m/Y");
    $todaydmY = date("dmy");

    $Check_rid_qry = "SELECT * FROM `need` WHERE `id` = 1";
    $Check_rid_run = mysqli_query($conn, $Check_rid_qry);
    $Check_rid_data = mysqli_fetch_assoc($Check_rid_run);
    $Seq = $Check_rid_data['value'] + 1;

    $RankersId = "R2NS" . ($todaydmY) .  sprintf("%03s", $Seq);

    // Insert Query
    $signin_qry = "INSERT INTO `signup` (`id`, `rankers_id`, `email`, `password`, `fname`,`user_type`) 
                    VALUES (NULL, '$RankersId', '$email', '$password', '$fname','user')";
    $signin_run = mysqli_query($conn, $signin_qry);
    if ($signin_run) {
        // For update Rankers Id Series
        mysqli_query($conn, "UPDATE `need` SET `value` = '$Seq' WHERE `need`.`id` = '1'");
        header("Location: ../login.php");
        echo '<script>alert("You have registered successfully!!")</script>';
    } else {
        echo '<script>alert("Oops!!! Something Wrong.")</script>';
    }
} else {
    echo '<script>alert("Data not found ")</script>';
}
