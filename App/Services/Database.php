<?php

    require_once(__DIR__ . "/../Config/Configuration.php");

    class Database {

        protected $pdo;

        public function connect() 
        {
            try {
                $pdo = new PDO(Dns, UserName, Password);
                return $pdo;
                
            } catch (PDOException $e) {
                echo "Error Connection To The Database " . $e->getMessage();
            }
        }
    }

?>