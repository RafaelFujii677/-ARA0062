<?php

class DAO {
    
    private $dsn, $user, $password, $conn;
    
    function __construct() {
        $this->dsn = 'mysql:dbname=projeto;host=localhost';
        $this->user = 'root';
        $this->password = 'nD4K56o=y9#+2akN';
        
        try {
            $this->conn = new PDO($this->dsn, $this->user, $this->password);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    function query($sql) {
       try {
           return $this->conn->query($sql);
        } catch (PDOException $e) {
            echo 'Query failed: ' . $e->getMessage();
        }
    }
    
    function exec($sql){
         try {
           return $this->conn->exec($sql);
        } catch (PDOException $e) {
            echo 'Exec failed: ' . $e->getMessage();
        }
    }
}
?>
