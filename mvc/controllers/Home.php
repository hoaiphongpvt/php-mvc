<?php
    class Home extends Controller {
        static function SayHi() {
            $sv = self::model("SinhVienModel");
            echo $sv->GetSinhVien();
        }

        static function Show() {
            echo "Home - Show";
        }
    }
?>