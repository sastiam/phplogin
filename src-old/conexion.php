<?php

    class Database {
        private $host;
        private $db;
        private $dbuser;
        private $dbpass;

        public function __construct($host, $db, $dbuser, $dbpass) {

            $this->host = $host;
            $this->db = $db;
            $this->dbuser = $dbuser;
            $this->dbpass = $dbpass;
        }

        public function init() {
            try {
                $dsn = "mysql:host={$this->host};dbname={$this->db}";
                $conn = new PDO($dsn, $this->dbuser, $this->dbpass);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
            } catch(PDOException $e) {
                return $e->getMessage();
            }
        }

        
    }

    


    // Parametros de PDO
    #$db = new Database('localhost', 'phplogin', 'grupo1', 'grupo1');
    // Conexion a la BD
    #$conn = $db->init();

?>