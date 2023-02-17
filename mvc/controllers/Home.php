<?php
    class Home extends Controller {
        static function SayHi() {
            $sv = self::model("SinhVienModel");
            echo $sv->GetSinhVien();
        }

        static function Show($a, $b) {
            $sv = self::model("SinhVienModel");
            $tong =  $sv->Tong($a, $b);
            self::view("aodep", ["Number"=>$tong, "Page"=>"contact"]);
        }
    }
?>