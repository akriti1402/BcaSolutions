<?php
include("../connection.php");
// For Update value in the form
if (isset($_POST['Edit_id'])) {
    $Edit_id = $_POST['Edit_id'];
    $Edit_qry = "SELECT * FROM `course` WHERE `course`.`id` = '$Edit_id'";
    $Edit_run = mysqli_query($conn, $Edit_qry);
    $Edit_data = mysqli_fetch_assoc($Edit_run);
    $cname = $Edit_data['course'];
    $description = $Edit_data['description'];
    $banner = $Edit_data['banner'];

    echo $cname;
    // echo $Edit_data = mysqli_fetch_array($Edit_run);
}
