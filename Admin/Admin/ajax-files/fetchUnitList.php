<?php
include("../connection.php");
?>
<thead>
    <tr>
        <th>Course</th>
        <th>Sem</th>
        <th>Suject</th>
        <th>Year</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    <?php

    // $Sqy = "SELECT * FROM `unit`";

    $Sqy = "SELECT `unit`.`course` , `unit`.`sem` ,`unit`.`unit`, `subject`.`subject`,`unit`.`id`
            FROM `unit` JOIN `subject`  
            ON `subject`.`id` =`unit`.`sub`
            ORDER BY `subject`.`subject`";
    // echo "<script>alert('" . $Sqy . "')</script>";
    // echo $Sqy;
    $Srun = mysqli_query($conn, $Sqy);
    while ($Srow = mysqli_fetch_array($Srun)) {
    ?>
        <tr>
            <td>
                <div class="sell-table-group d-flex align-items-center">
                    <div class="sell-tabel-info">
                        <p style="text-align: center;"><a href="course-details.html"> <?php echo $Srow['course']; ?> </a>
                    </div>
                </div>
            </td>
            <td>
                <div class="sell-table-group d-flex align-items-center">
                    <div class="sell-tabel-info">
                        <p style="text-align: center;"><a href="course-details.html"><?php echo $Srow['sem']; ?></a>
                    </div>
                </div>
            </td>
            <td>
                <div class="sell-table-group d-flex align-items-center">
                    <div class="sell-tabel-info">
                        <p style="text-align: center;"><a href="course-details.html"><?php echo $Srow['subject']; ?></a>
                    </div>
                </div>
            </td>
            <td>
                <div class="sell-table-group d-flex align-items-center">
                    <div class="sell-tabel-info">
                        <p style="text-align: center;"><a href="course-details.html"><?php echo $Srow['unit']; ?></a>
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
<?php
if (isset($_POST['Del_id'])) {
    $Del_id = $_POST['Del_id'];
    $Del_Qry = "DELETE FROM `unit` WHERE `id` = '$Del_id'";
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
                    url: "ajax-files/fetchUnitList.php",
                    method: "POST",
                    data: {
                        Del_id: Del_id
                    },
                    success: function(response) {
                        // alert(response);
                        // $("#SubList").load("ajax-files/fetchSubList.php");
                        $('#UnitList').load('ajax-files/fetchUnitList.php');
                    }
                })
            } else {
                alert("Your Data is safe.")
            }
        })
    })
</script>