<?php 
include 'app/Controller/FlowerCon.php';
    $web = new FlowerCon();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $web->CRUD();
    } else if (isset($_GET['action'])) {
        switch ($_GET['action']) {
            case 'admin':
                $web->showAdminPage();
                break;
            default:
                $web->showFlower();
        }
    } else {
        $web->showFlower();
    }

?>