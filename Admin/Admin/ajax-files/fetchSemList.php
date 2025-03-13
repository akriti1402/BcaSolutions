<?php
include("../connection.php");
// Fetch Semester List
if (isset($_POST['course'])) {
    $course = $_POST['course'];
    $sql = "SELECT * FROM `semester` WHERE `course` = '$course'";
    $result = mysqli_query($conn, $sql);
    echo ' <option value="">Select</option>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '  <option value="' . $row['sem'] . '">' . $row['sem'] . '</option>';
    }
}
