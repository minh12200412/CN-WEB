<?php
// Hiển thị số câu trả lời đúng
?>
<div class="alert alert-success text-center">
    Bạn trả lời đúng <strong><?php echo $score; ?></strong> / <?php echo count($questions); ?> câu.
</div>
<a href="index.php" class="btn btn-primary">Làm lại</a>