<?php
    class SinhVienModel extends DB{

        public function GetSinhVien() {
            return "Nguyen Hoai Phong";
        }

        public function Tong($a, $b) {
            return $a + $b;
        }

        public static function SinhVien() {
            $con = parent::$con;
            $qr = "SELECT * FROM sinhvien";
            return mysqli_query($con, $qr);
        }

    }
?>