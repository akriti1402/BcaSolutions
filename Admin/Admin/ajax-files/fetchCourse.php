<?php
include("../connection.php");

$sql = "SELECT * FROM `course` ORDER BY `id` DESC";
$run = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($run)) {
?>
    <tr>
        <td>
            <div class="sell-table-group d-flex align-items-center">
                <div class="sell-group-img">
                    <a href="course-details.html">
                        <img src="ajax-files/image/<?php echo $row['banner']; ?>" class="img-fluid " alt="">
                    </a>
                </div>
                <div class="sell-tabel-info">
                    </p>
                    <p><a href="#course-details.html">
                            <?php echo $row['course'] . " - " . $row['description']; ?>
                        </a>
                </div>
            </div>
        </td>
        <td>
            <center>
                <!-- <span class="edit" data-id="<?php echo $row['id']; ?>"><i class="feather-settings"></i>&nbsp;</span> -->
                <a href="addCourse.php?Eid=<?php echo $row['id']; ?>"><i class="feather-settings"></i>&nbsp;</a>
                <a href="#del"><span class="delete" data-id="<?php echo $row['id']; ?>"> <i class="feather-trash-2"></i></span></a>
            </center>
        </td>
    </tr>
<?php
}
?>
<!-- For Delete Query -->
<?php
if (isset($_POST['Del_id'])) {
    $Del_id = $_POST['Del_id'];
    $del_qry = "DELETE FROM `course` WHERE `course`.`id` = '$Del_id'";
    mysqli_query($conn, $del_qry);
}


?>

<script>
    $(document).ready(function() {
        $(document).on('click', '.delete', function() {
            // alert("OK");
            var Del_id = $(this).attr('data-id');
            if (confirm("Are you sure you want to delete?")) {
                $.ajax({
                    url: "ajax-files/fetchCourse.php",
                    type: "POST",
                    data: {
                        Del_id: Del_id
                    },
                    success: function(response) {
                        // alert(response);
                        $("#CourseData").load("ajax-files/fetchCourse.php");
                    }
                })
            }
        })
    })
</script>