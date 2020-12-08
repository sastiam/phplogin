<?php
    class Database {
        public static function init() {
            try {
                $pdo = new PDO('mysql:host=localhost;dbname=phplogin;charset=utf8', 'tiam', 'tiam');
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
            } catch(Exception $e) {
                die($e->getMessage());
            }
            
        }
    }
?>