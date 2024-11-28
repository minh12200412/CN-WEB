<?php
class StudentModel {
    private $filename = "KTPM3_Danh_sach_diem_danh.csv";

    public function getAllStudents() {
        $students = [];

        if (($handle = fopen($this->filename, "r")) !== FALSE) {
            $headers = fgetcsv($handle, 1000, ",");
            if (isset($headers[0]) && ord($headers[0][0]) == 239) {
                $headers[0] = substr($headers[0], 3);
            }
            if ($headers === FALSE) {
                return [];
            }
            // echo "<pre>";
            // print_r($headers); 
            // echo "</pre>";
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                if (count($data) == count($headers)) {
                    $students[] = array_combine($headers, $data); 
                }
            }

            fclose($handle);
        }

        return $students;
    }
}


?>