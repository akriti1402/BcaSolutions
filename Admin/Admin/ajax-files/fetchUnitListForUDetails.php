<?php
include("../connection.php");
// Fetch Subject List
if (isset($_POST['sem']) && $_POST['course'] && $_POST['sub']) {
    $course1 = $_POST['course'];
    $sem = $_POST['sem'];
    $sub = $_POST['sub'];
    $sql1 = "SELECT * FROM `unit` WHERE `course` = '$course1' AND `sem` = '$sem' AND `sub`='$sub'";
    $result1 = mysqli_query($conn, $sql1);
    echo ' <option value="">Select</option>';
    while ($row1 = mysqli_fetch_assoc($result1)) {
        echo ' <option value="' . $row1['id'] . '">' . $row1['unit'] . '</option>';
    }
}
