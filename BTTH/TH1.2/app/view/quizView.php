<?php
include 'app/view/header.php';
?>
<div class="container mt-5">
    <h2>Quiz Trắc Nghiệm</h2>
    <form method="POST" action="index.php?action=submit">
        <?php foreach ($questions as $question): ?>
        <div class="card mb-4">
            <div class="card-header"><strong><?php echo $question['question_text']; ?></strong></div>
            <div class="card-body">
                <?php for ($i = 'A'; $i <= 'D'; $i++): ?>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="question<?php echo $question['id']; ?>"
                        value="<?php echo $i; ?>" id="question<?php echo $question['id'] . $i; ?>">
                    <label class="form-check-label" for="question<?php echo $question['id'] . $i; ?>">
                        <?php echo $question["option_$i"]; ?>
                    </label>
                </div>
                <?php endfor; ?>
            </div>
        </div>
        <?php endforeach; ?>
        <button type="submit" class="btn btn-primary">Nộp bài</button>
    </form>
</div>
<?php
include 'app/view/footer.php';
?>