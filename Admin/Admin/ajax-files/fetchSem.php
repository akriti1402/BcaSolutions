<?php
include("../connection.php");

?>
<thead>
    <tr>
        <th>Course</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    <?php
    $SemQry = "SELECT * FROM `semester` 
                ORDER BY `semester`.`course` ASC";
    $SemRun = mysqli_query($conn, $SemQry);
    while ($SemData = mysqli_fetch_assoc($SemRun)) {
    ?>
        <tr>
            <td>
                <div class="sell-table-group d-flex align-items-center">
                    <div class="sell-group-img">
                        <a href="#course-details">
                            <img src="ajax-files/image/<?php echo $SemData['banner']; ?>" class="img-fluid " alt="">
                        </a>
                    </div>
                    <div class="sell-tabel-info">
                        </p>
                        <p><a href="#course-details"><?php echo $SemData['course'] . " - " . $SemData['sem']; ?></a>
                    </div>
                </div>
            </td>
            <td>
                <center>
                    <a href="addSem.php?Eid=<?php echo $SemData['id']; ?>" data-id=""><i class="feather-settings"></i>&nbsp;</a>
                    <a href="#Del" class="Delete" data-id="<?php echo $SemData['id']; ?>"> <i class="feather-trash-2"></i></a>
                </center>
            </td>
        </tr>
    <?php
    }
    ?>
</tbody>
<?php

if (isset($_POST['Del_idSem'])) {
    $Del_idSem = $_POST['Del_idSem'];
    $Del_Qry = "DELETE FROM `semester` WHERE `semester`.`id` = '$Del_idSem'";
    $Del_Run = mysqli_query($conn, $Del_Qry);
    if ($Del_Run) {
        echo "<script>alert('Deleted Successfully')</script>";
    } else {
        echo "<script>alert('Error Occured')</script>";
    }
}
?>
<script>
    // For Delete
    $(document).ready(function() {
        $('.Delete').click(function() {
            var Del_idSem = $(this).data('id');
            if (confirm("Are you sure you want to delete this item?")) {
                $.ajax({
                    url: "ajax-files/fetchSem.php",
                    method: "POST",
                    data: {
                        Del_idSem: Del_idSem
                    },
                    success: function(response) {
                        // alert(response);
                        // location.reload();  
                        $('#SemData').load('ajax-files/fetchSem.php');
                    }
                })
            } else {
                // alert("Your Data is safe.");
            }
        })
    })
</script>