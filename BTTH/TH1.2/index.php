<?php
include 'app/controller/quizCon.php';
$controller = new QuizController();
$action = isset($_GET['action']) ? $_GET['action'] : 'show';
if ($action == 'show') {
    $controller->showQuiz(); 
} elseif ($action == 'submit') {
    $controller->handleSubmission();
}
?>