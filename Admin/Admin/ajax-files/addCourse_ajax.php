<?php
// echo "<script>alert('Ok!!!')</script>";
include("../connection.php");
session_start();
$userEmail = $_SESSION['email'];
$rankersId = $_SESSION['rankers_id'];
// extract($_POST);
if ($_FILES['cthumbnail']['name'] == "") {
    $img_name2 = $_POST['Ebanner'];
} else {
    $img_name = $_FILES['cthumbnail']['name'];
    $img_name2 = rand(10, 1000) . "_" . $img_name;
    $folder = "image/" . $img_name2;
    $temp_name = $_FILES['cthumbnail']['tmp_name'];
    $extenstion = array("jpg", "jpeg", "png", "pdf");
    $fileExtension = pathinfo("image/" . $img_name2, PATHINFO_EXTENSION);
    if (in_array($fileExtension, $extenstion)) {
        if (!(move_uploaded_file($temp_name, $folder))) {
            echo "<script>alert('Image not Uploaded')</script>";
        }
    } else {
        echo "<script>alert('Invalid Image Format')</script>";
    }
}
$cname = $_POST['cname'];
$cdesc = $_POST['cdesc'];
if ($_POST['Eid']) {
    $Eid = $_POST['Eid'];
    $in_qry = "UPDATE `course` SET `description` = '$cdesc' , `course` = '$cname' , `banner` = '$img_name2' ,`updated_by`= '$userEmail'
                        WHERE `course`.`id` = '$Eid'";
} else {
    $in_qry = "INSERT INTO `course` (`id`, `course`, `banner`, `description`,`updated_by`, `status`) 
                            VALUES (NULL, '$cname','$img_name2' ,'$cdesc','$userEmail','show')";
}
$in_run = mysqli_query($conn, $in_qry);
if ($in_run) {
    echo "<script>alert('Course Added Successfull!!!')</script>";
} else {
    echo "<script>alert('Course Added Successfull!!!')</script>";
}
