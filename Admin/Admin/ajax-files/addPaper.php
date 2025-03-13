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
$course = $_POST['course'];
$SemList = $_POST['SemList'];
$SubList = $_POST['SubList'];
$pname = $_POST['pname'];
$inQry = "INSERT INTO `paper` (`id`, `course`, `sem`, `sub`, `year`,`banner`, `status`, `updated_on`) 
            VALUES (NULL, '$course', '$SemList', '$SubList', '$pname', '$imgName', 'show', current_timestamp())";
$inRun = mysqli_query($conn, $inQry);
if ($inRun) {
    echo "<script>alert('Unit Saved Successfully');</script>";
} else {
    echo "<script>alert('Oops! unable to Save Paper');</script>";
}
