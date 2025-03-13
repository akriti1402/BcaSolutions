<?php
include("../connection.php");

?>
<thead>
    <tr>
        <th>Suject</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    <?php

    $Sqy = "SELECT * FROM `subject` ORDER BY `subject`";
    $Srun = mysqli_query($conn, $Sqy);
    while ($Srow = mysqli_fetch_array($Srun)) {
    ?>
        <tr>
            <td>
                <div class="sell-table-group d-flex align-items-center">
                    <div class="sell-group-img">
                        <a href="course-details.html">
                            <img src="ajax-files/image/<?php echo $Srow['banner']; ?>" class="img-fluid " alt="">
                        </a>
                    </div>
                    <div class="sell-tabel-info">
                        </p>
                        <p><a href="course-details.html"><?php echo $Srow['semester'] . "-" . $Srow['subject']; ?></a>
                    </div>
                </div>
            </td>
            <td>
                <center>
                    <a href="#Edit<?php echo $Srow['id']; ?>"><i class="feather-settings"></i>&nbsp;</a>
                    <span class="Delete" data-id="<?php echo $Srow['id']; ?>"> <i class="feather-trash-2"></i></span>
                </center>
            </td>
        </tr>
    <?php
    }
    ?>
</tbody>
<!-- For Delete PHP -->
<?php
if (isset($_POST['Del_id'])) {
    $Del_id = $_POST['Del_id'];
    $Del_Qry = "DELETE FROM `subject` WHERE `id` = '$Del_id'";
    if (mysqli_query($conn, $Del_Qry)) {
        echo "<script>alert('Subject Deleted Successfully')</script>";
    } else {
        echo "<script>alert('Subject Delete Failed')</script>";
    }
}
?>
<!-- For Delete AJAX-->
<script>
    $(document).ready(function() {
        $('.Delete').on('click', function() {
            var Del_id = $(this).data('id');
            // alert(Del_id);
            if (confirm("Are you sure want to Delete ?")) {
                $.ajax({
                    url: "ajax-files/fetchSubList.php",
                    method: "POST",
                    data: {
                        Del_id: Del_id
                    },
                    success: function(response) {
                        // alert(response);
                        // $("#SubList").load("ajax-files/fetchSubList.php");
                        $('#SubList').load('ajax-files/fetchSubList.php');
                    }
                })
            } else {
                alert("Your Data is safe.")
            }
        })
    })
</script>