<?php
    class API_Sinhvien extends Controller {
        public static function DanhSach() {
            $sinhvien = self::model("SinhVienModel");
            $sv = $sinhvien->SinhVien();

            while($s = mysqli_fetch_array($sv)) {
                array_push($mang, new SinhVien($s["ID"], $s["HOTEN"], $s["NAMSINH"]));
            }
        }
    }
    
    class SinhVien {
        public $ID;
        public $HOTEN;
        public $NAMSINH;

        public function __construct($id, $hoten, $namsinh)
        {
            $this->ID = $id;
            $this->HOTEN = $hoten;
            $this->NAMSINH = $namsinh;
        }
    }
?>