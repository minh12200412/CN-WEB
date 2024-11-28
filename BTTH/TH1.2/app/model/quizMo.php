<?php 
class quizMo{

    private $db;
    public function __construct($filePath = 'Quiz.txt'){
        $this->db = $this->Connection();
    }
    public function Connection(){
        $host = '127.0.0.1';
        $db = 'quiz_app';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';
        try {
            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, 
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
                PDO::ATTR_EMULATE_PREPARES   => false, 
            ];
            $pdo = new PDO($dsn, $user, $pass, $options);
        
            // echo "Kết nối thành công!";
            } catch (PDOException $e) {

            // echo "Kết nối thất bại: " . $e->getMessage();
            }
        return $pdo;
    }
    public function getQuestions() {
        $rs =  $this->db->query("SELECT * FROM questions");
        return $rs->fetchAll(PDO::FETCH_ASSOC);
    }
    public function saveQuestion($question, $options, $correctAnswer) {
        $stmt = $this->db->prepare("
            INSERT INTO questions (question, option_a, option_b, option_c, option_d, correct_answer)
            VALUES (?,?,?,?,?,?)
        ");
        $stmt->bindParam(1, $question);
        $stmt->bindParam(2, $options[0]);
        $stmt->bindParam(3, $options[1]);
        $stmt->bindParam(4, $options[2]);
        $stmt->bindParam(5, $options[3]);
        $stmt->bindParam(6, $correctAnswer);
        $stmt->execute();
    }
    // private $ques = [];
    // private $ans = [];
    // private function loadQues($filePath) {
    //     if (!file_exists($filePath)) {
    //         throw new Exception("Tệp tin không tồn tại: $filePath");
    //     }

    //     $file = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    //     $currQues = [];
    //     foreach ($file as $line) {
    //         if (strpos($line, "Câu") === 0) {
    //             if (!empty($currQues)) {
    //                 $this->processQuestion($currQues);
    //             }
    //             $currQues = [];
    //         }
    //         $currQues[] = $line;
    //     }
    //     if (!empty($currQues)) {
    //         $this->processQuestion($currQues);
    //     }
    // }
    // private function processQuestion($lines) {
    //     $questionText = array_shift($lines);
    //     $answerLine = array_pop($lines);
    //     $correctAnswer = trim(substr($answerLine, strpos($answerLine, ":") + 1));

    //     $this->ques[] = [
    //         'question' => $questionText,
    //         'options' => $lines,
    //     ];
    //     $this->ans[] = $correctAnswer;
    // }

    // public function getQuestions() {
    //     return $this->ques;
    // }

    // public function getAnswers() {
    //     return $this->ans;
    // }

}