<?php 
include 'app/model/FlowerMo.php';

class FlowerCon {
    private $flowerMo;

    public function __construct(){
        $this->flowerMo = new FlowerMo();
    }
    public function showFlower(){
        $flowers = $this->flowerMo->getAllFlowers();
        include 'app/view/FlowerVie.php';
    }
    public function showAdminPage() {
        $flowers = $this->flowerMo->getAllFlowers();
        include 'app/view/admin.php';
    }
    public function CRUD() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action'])) {
            switch ($_POST['action']) {
                case 'add':
                    $this->flowerMo->addFlower([
                        'ten' => htmlspecialchars($_POST['ten']),
                        'moTa' => htmlspecialchars($_POST['moTa'])
                    ]);
                    break;
                case 'edit':
                    $this->flowerMo->updateFlower([
                        'id' => intval($_POST['id']),
                        'ten' => htmlspecialchars($_POST['ten']),
                        'moTa' => htmlspecialchars($_POST['moTa'])
                    ]);
                    break;
                case 'delete':
                    $this->flowerMo->deleteFlower(intval($_POST['id']));
                    break;
            }
        }
        $this->showAdminPage();
    }
}