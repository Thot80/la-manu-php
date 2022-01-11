<?php

class DatabaseManager{

    
        private static $host = 'localhost';
        private static $db_name = 'hospitale2n';
        private static $user = 'root';
        private static $password = '';
        

        /**
         * Constructor
         */
        public static function getInstance():PDO{
            $conn = null;

            try {
                $conn = new PDO('mysql:host=' . DatabaseManager::$host . ';dbname=' . DatabaseManager::$db_name, DatabaseManager::$user, DatabaseManager::$password);
                $conn->setAttribute( PDO::ERRMODE_EXCEPTION, PDO::FETCH_OBJ);
            } catch (PDOException $e) {
                echo 'Connection error : ' . $e->getMessage();
            }
            return $conn;
        }

}