

<?php
include("../connection.php");

$img = $_FILES['sthumbnail']['name'];
$imgName = rand(100, 1000) . "_" . $img;
$tmp_img = $_FILES['sthumbnail']['tmp_name'];
$folder = "image/" . $imgName;
$extension = array("jpg", "jpeg", "png");
$fileExtenstion = pathinfo($folder, PATHINFO_EXTENSION);
if (in_array($fileExtenstion, $extension)) {
    move_uploaded_file($tmp_img, $folder);
} else {
    echo '<script>alert("Invalid Image Format.")</script>';
}

$course = $_POST['course'];
$SemList = $_POST['SemList'];
$sname = $_POST['sname'];

$in_qry = "INSERT INTO `subject` (`id`, `course`, `semester`, `subject`, `banner`, `status`, `updated_on`)
            VALUES (NULL, '$course', '$SemList', '$sname', '$imgName', 'show', current_timestamp());";
$in_run = mysqli_query($conn, $in_qry);
if ($in_run) {
    echo '<script>alert("Subject Saved Successfully.")</script>';
} else {
    echo '<script>alert("Subject Save Failed.")</script>';
}
