<?php
    class DB {

        public static $con;
        protected $servername = "localhost";
        protected $username = "root";
        protected $password = "";
        protected $dbname = "mvc";

        function __construct()
        {
            self::$con = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
            mysqli_query(self::$con, "SET NAMES 'utf8'");
        }
    }
?>