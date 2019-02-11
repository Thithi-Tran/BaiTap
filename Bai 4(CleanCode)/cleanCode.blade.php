<?php
    class SinhVien{
        public $diem = 7;
        public function xetHocLuc(){
            if($this ->diem >= 8.5){
                echo "Giỏi";
            }else if($this ->diem >= 7 && $this ->diem < 8.5){
                echo "Khá";
            }else if($this ->diem > 4 && $this ->diem < 7){
                echo "Trung bình";
            }else{
                echo "Kém";
            }
        }
    }
    $sinh_vien = new SinhVien;
    //Hien thi hoc luc cua sinh vien
    echo "Điểm: " . $sinh_vien -> diem . " -> Học lực: ";
    $sinh_vien -> xetHocLuc();
?>