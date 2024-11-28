<?php
include 'app/model/quizMo.php';

class QuizController {
    private $quizModel;

    public function __construct() {
        $this->quizModel = new quizMo();
    }
    public function showQuiz() {
        $questions = $this->quizModel->getQuestions();
        require 'app/view/quizView.php';
    }

    public function handleSubmission() {
        $score = 0;
        $questions = $this->quizModel->getQuestions();
        foreach ($questions as $index => $question) {
            $correctAnswer = $question['correct_answer'];
            $userAnswer = isset($_POST["question{$question['id']}"]) ? $_POST["question{$question['id']}"] : null;
            if ($userAnswer === $correctAnswer) {
                $score++;
            }
        }

        require 'app/view/resultView.php';
    }
}
?>