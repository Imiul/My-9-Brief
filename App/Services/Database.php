<?php

    require_once("../Config/Configuration.php");

    class Database {

        protected $pdo;

        public function connect() 
        {
            try {
                $pdo = new PDO(Dns, UserName, Password);
                echo "<script>console.log('Connected Succesfully');</script>";
                return $pdo;
                
            } catch (PDOException $e) {
                echo "Error Connection To The Database " . $e->getMessage();
            }
        }
    }

?>