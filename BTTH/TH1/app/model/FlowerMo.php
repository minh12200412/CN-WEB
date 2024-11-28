<?php 
    class FlowerMo{
        private $flowers = [];
        private $db;

        public function __construct(){
            $this->db = $this->Connection();
        }
        public function Connection(){
            $host = '127.0.0.1';
            $db = 'btth';
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
                // Xử lý lỗi khi kết nối thất bại
                // echo "Kết nối thất bại: " . $e->getMessage();
                }
            return $pdo;
        }
        public function getAllFlowers(){
            $rs =  $this->db->query("select * from flowers");
            $this->flowers = $rs->fetchAll(PDO::FETCH_ASSOC);
            return $this->flowers;
        }
        public function addFlower($flower) {
            $stm = $this->db->prepare("INSERT INTO flowers (ten, moTa, img) VALUES (?, ?, ?)");
            $stm->bindParam(1, $flower['ten']);
            $stm->bindParam(2, $flower['moTa']);
            $stm->bindParam(3, $flower['img']);
            $stm->execute();
            $flower['id'] = $this->db->lastInsertId();
            $this->flowers[] = $flower;
        }
    
        public function updateFlower($updatedFlower) {
            // foreach ($this->flowers as &$flower) {
            //     if ($flower['id'] == $updatedFlower['id']) {
            //         $flower['ten'] = $updatedFlower['ten'];
            //         $flower['moTa'] = $updatedFlower['moTa'];
            //         break;
            //     }
            // }
            $stm = $this->db->prepare("UPDATE flowers SET ten = ?, moTa = ? WHERE id = ?");
            $stm->bindParam(3,$updatedFlower['id']);
            $stm->bindParam(1,$updatedFlower['ten']);
            $stm->bindParam(2,$updatedFlower['moTa']);
            $stm->execute();
            $this->flowers[] = $this->getAllFlowers();

        }
    
        public function deleteFlower($id) {
            $stm = $this->db->prepare("delete from flowers where id = ? ");
            $stm->bindParam(1,$id);
            $stm->execute();
            // foreach ($this->flowers as $key => $flower) {
            //     if ($flower['id'] == $id) {
            //         unset($this->flowers[$key]);
            //         $this->flowers = array_values($this->flowers);
            //         break;
            //     }
            // }
        $this->flowers[] = $this->getAllFlowers();
        }
    }