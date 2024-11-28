<?php 
    class FlowerMo{
       private $flowers = array(
            ['id' => 1,'ten' => "Hoa dạ yến thảo",'moTa' => "Hoa có thể nở rực quanh năm",'img' => 'images/hoa1.png' ],
            ['id' => 2,'ten' => "Hoa đồng tiền",'moTa' => "Cây có hoa to, nở rộ rực rỡ",'img' => 'images/hoa2.png' ],
            ['id' => 3,'ten' => "Hoa giấy",'moTa' => "Hoa giấy có mặt ở hầu khắp mọi nơi trên đất nước ta",'img' => 'images/hoa3.png' ],
            ['id' => 4,'ten' => "Hoa thanh tú",'moTa' => "Mang dáng hình tao nhã, màu sắc thiên thanh dịu dàng",'img' => 'images/hoa4.png' ],
            ['id' => 5,'ten' => "Hoa đèn lồng",'moTa' => "Có vẻ đẹp giống như chiếc đèn lồng đỏ trên cao",'img' => 'images/hoa5.png' ],
            ['id' => 6,'ten' => "Hoa cẩm chướng",'moTa' => "Cẩm chướng là loại hoa thích hợp trồng vào dịp xuân - hè",'img' => 'images/hoa6.png' ],
        );
        public function getAllFlowers(){
            return $this->flowers;
        }
        public function addFlower($flower) {
            $flower['id'] = count($this->flowers) + 1; 
            $this->flowers[] = $flower;
        }
    
        public function updateFlower($updatedFlower) {
            foreach ($this->flowers as &$flower) {
                if ($flower['id'] == $updatedFlower['id']) {
                    $flower['ten'] = $updatedFlower['ten'];
                    $flower['moTa'] = $updatedFlower['moTa'];
                    break;
                }
            }
        }
    
        public function deleteFlower($id) {
            foreach ($this->flowers as $key => $flower) {
                if ($flower['id'] == $id) {
                    unset($this->flowers[$key]);
                    $this->flowers = array_values($this->flowers);
                    break;
                }
            }
        }
    }