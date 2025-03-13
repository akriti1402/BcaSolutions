<?php
include("../connection.php");

if ($sub_id = $_POST['sub']) {
    $Ssql = "SELECT * FROM `subject` WHERE `id` = '$sub_id'";
} else {
    $Ssql = "SELECT * FROM `subject`";
}
$Sresult = mysqli_query($conn, $Ssql);
$Srow = mysqli_fetch_assoc($Sresult);

?>
<div class="curriculum-grid">
    <div class="curriculum-head">
        <!-- <p>Introduction to C Programming</p> -->
        <p><?php echo $Srow['subject']; ?></p>
    </div>
    <?php
    if ($_POST['sem']) {
        $sem = $_POST['sem'];
        $course = $_POST['course'];
        $Usql = "SELECT * FROM `unit` WHERE `course` = '$course' AND `sem` = '$sem' AND `sub` = '$sub_id'";
    } else {
        $Usql = "SELECT * FROM `unit`";
    }
    $URun = mysqli_query($conn, $Usql);
    $i = 1;
    while ($Urow = mysqli_fetch_assoc($URun)) {
        if ($i == 1) {
            $char = "One";
        }
        if ($i == 2) {
            $char = "Two";
        }
        if ($i == 3) {
            $char = "Three";
        }
        if ($i == 4) {
            $char = "Four";
        }
        if ($i == 5) {
            $char = "Five";
        }
    ?>
        <div class="curriculum-info">
            <div id="accordion">
                <div class="faq-grid">
                    <div class="faq-header">
                        <a class="collapsed faq-collapse" data-bs-toggle="collapse" href="#collapse<?php echo $char; ?>">
                            <i class="fas fa-align-justify"></i>
                            <?php echo $Urow['unit']; ?>
                        </a>
                        <div class="faq-right">
                            <a href="javascript:void(0);">
                                <i class="far fa-pen-to-square me-1"></i>
                            </a>
                            <a href="javascript:void(0);" class="me-0">
                                <i class="far fa-trash-can"></i>
                            </a>
                        </div>
                    </div>
                    <div id="collapse<?php echo $char; ?>" class="collapse" data-bs-parent="#accordion">
                        <div class="faq-body">
                            <div class="add-article-btns">
                                <p><?php echo $Urow['detail']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
        $i++;
    }
    ?>
    <!-- <div class="curriculum-info">
        <div id="accordion">
            <div class="faq-grid">
                <div class="faq-header">
                    <a class="collapsed faq-collapse" data-bs-toggle="collapse" href="#collapseTwo">
                        <i class="fas fa-align-justify"></i>
                        Unit 2
                    </a>
                    <div class="faq-right">
                        <a href="javascript:void(0);">
                            <i class="far fa-pen-to-square me-1"></i>
                        </a>
                        <a href="javascript:void(0);" class="me-0">
                            <i class="far fa-trash-can"></i>
                        </a>
                    </div>
                </div>
                <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                    <div class="faq-body">
                        <div class="add-article-btns">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto alias accusamus ab pariatur et enim molestiae aliquid rem vero ad?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>