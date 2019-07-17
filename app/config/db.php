<?php
    class db {

    // connection variables
    public $host = '';
    public $username = '';
    public $password = '';
    public $dbname = '';
    
    // database connection function
    public function connect(){

        // pdo connection
        $dsn = "mysql:host=$this->host;dbname=$this->dbname;";
        $pdo = new PDO($dsn,$this->username,$this->password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } 
}

