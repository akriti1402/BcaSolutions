<?php
include("../connection.php");

$img = $_FILES['pthumbnail']['name'];
$imgName = rand(1000, 999999) . "_" . $img;
$img_tmp = $_FILES['pthumbnail']['tmp_name'];
$folder = "image/" . $imgName;

$extension = array("jpg", "png", "jpeg", "pdf");
$FileExtenstion = pathinfo($folder, PATHINFO_EXTENSION);
if (in_array($FileExtenstion, $extension)) {
    if (!(move_uploaded_file($img_tmp, $folder))) {
        echo "<script>alert('Oops!! unable to move image');</script>";
    }
} else {
    echo "<script>alert('Invalid banner format, choose jpg or jpeg or png');</script>";
}
$Uid = $_POST['UnitList'];
$UDetail = $_POST['UnitDetail'];
$sql = "UPDATE `unit` SET `detail` = '$imgName' WHERE `unit`.`id` = '$Uid'";
$URun = mysqli_query($conn, $sql);
if ($URun) {
    echo '<script>alert("Unit Added Successfully!!");</script>';
} else {
    echo '<script>alert("Unit Not Added!!");</script>';
}
