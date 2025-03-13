<?php
include("../connection.php");

if ($_FILES['banner']['name'] == "") {
    $imgName = $_POST['Ebanner'];
} else {
    $img = $_FILES['banner']['name'];
    $imgName = rand(1000, 10000) . "_" . $img;
    $folder = "image/" . $imgName;
    $img_tmp = $_FILES['banner']['tmp_name'];
    $extension = array("jpg", "jpeg", "png");
    $fileExtensiton = pathinfo($folder, PATHINFO_EXTENSION);
    if (in_array($fileExtensiton, $extension)) {
        if (!(move_uploaded_file($img_tmp, $folder))) {
            echo "<script>alert('Oops! unable to move image');</script>";
        }
    } else {
        echo "<script>alert('Invalid banner format, choose jpg or jpeg or png');</script>";
    }
}

$cname = $_POST['cname'];
$sname = $_POST['sname'];
if ($_POST['Eid']) {
    $Eid = $_POST['Eid'];
    $in_qry = "UPDATE `semester` SET `course` = '$cname', `sem`='$sname' , `banner`='$imgName'
                        WHERE `semester`.`id` = '$Eid'";
} else {
    $in_qry = "INSERT INTO `semester` (`id`, `course`, `sem`, `banner`, `status`, `updated_on`) 
                    VALUES (NULL, '$cname', '$sname', '$imgName', 'show', current_timestamp())";
}
$in_run = mysqli_query($conn, $in_qry);
if ($in_run) {
    echo "<script>alert('Semester Saved Successfully');</script>";
} else {
    echo "<script>alert('Oops! unable to Save Semester');</script>";
}
