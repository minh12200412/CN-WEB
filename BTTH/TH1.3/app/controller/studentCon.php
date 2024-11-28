<?php
require_once 'app/model/studentMo.php';

class StudentController {
    private $studentModel;

    public function __construct() {
        $this->studentModel = new StudentModel();
    }

    public function showStudentList() {
        $students = $this->studentModel->getAllStudents();
        require_once 'app/view/studenView.php';
    }
}
?>