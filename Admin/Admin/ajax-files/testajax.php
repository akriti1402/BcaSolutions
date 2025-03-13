<?php
include("../connection.php");
$cname = $_POST['cname'];
$cdesc = $_POST['cdesc'];


$extenstion = array("jpg", "jpeg", "png", "pdf");
$img_name = $_FILES["cthumbnail"]["name"];
$img_name2 = rand(10, 1000) . "_" . $img_name;
$folder = "image/" . $img_name2;
$temp_name = $_FILES["cthumbnail"]["tmp_name"];
$fileExtension = pathinfo("image/" . $img_name2, PATHINFO_EXTENSION);
if (in_array($fileExtension, $extenstion)) {

    if (move_uploaded_file($temp_name, $folder)) {

        // $cname = $_POST['cname'];
        // $cdesc = $_POST['cdesc'];
        $in_qry = "INSERT INTO `course` (`id`, `course`, `banner`, `description`, `status`) 
                        VALUES (NULL, '$cname','$img_name2' ,'$cdesc','show')";
        // $in_run = mysqli_query($conn, $in_qry);
        $run = mysqli_query($conn, $in_qry);

        if ($run) {
            echo "<script>alert('Course Added Successfull!!!')</script>";
        } else {
            echo "<script>alert('Oops Something Wrong!!')</script>";
        }
    } else {
        echo "<script>alert('Image not Uploaded - " . $cname . "')</script>";
    }
}
